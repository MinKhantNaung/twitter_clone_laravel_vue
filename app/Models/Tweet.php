<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'handle',
        'tweet',
        'file',
        'is_video',
        'comments',
        'retweets',
        'likes',
        'analytics',
    ];
}
