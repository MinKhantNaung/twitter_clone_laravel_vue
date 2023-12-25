<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;
use Inertia\Inertia;

class TweetController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome', [
            'tweets' => Tweet::orderBy('id', 'desc')
                ->get()
        ]);
    }

    public function store(Request $request)
    {
        $file = null;
        $extension = null;
        $file_name = null;
        $path = '';

        $request->validate([
            'tweet' => 'required'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $request->validate([
                'file' => 'required|mimes:png,jpg,jpeg,svg,webp,mp4'
            ]);
            $extension = $file->getClientOriginalExtension();
            $file_name = uniqid() . '_' . $file->getClientOriginalName();
            $extension === 'mp4' ? $path = '/storage/videos/' : $path = '/storage/pics';

            // Remove the '/storage/' prefix for store with storeAs method
            $remove_path = str_replace('/storage/', '', $path);

            $file->storeAs($remove_path, $file_name, 'public');
        }

        Tweet::create([
            'name' => 'Min Khant Naung',
            'handle' => '@minkhantnaung',
            'image' => 'https://randomuser.me/api/portraits/men/40.jpg',
            'tweet' => $request->tweet,
            'file' => $file_name ? $path . $file_name : '',
            'is_video' => $extension === 'mp4' ? true : false,
            'comments' => rand(5, 500),
            'retweets' => rand(5, 500),
            'likes' => rand(5, 500),
            'analytics' => rand(5, 500),
        ]);
    }

    public function destroy($id)
    {
        $tweet = Tweet::find($id);

        if (!empty($tweet->file)) {
            // Remove the '/storage' prefix to get the actual storage path
            $storage_path = str_replace('/storage', 'public', $tweet->file);

            Storage::delete($storage_path);
        }

        $tweet->delete();

        return back();
    }
}
