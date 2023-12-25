<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
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
        //
    }

    public function destroy(Tweet $tweet)
    {
        //
    }
}
