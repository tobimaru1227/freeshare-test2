<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    /**
     * トップページを表示
     * @return view
     */
    public function index()
    {
        $tweets = Tweet::all();
        return view('tweets.index', ['tweets' => $tweets]);
    }
    
    /**
     * 投稿ページを表示
     * @return view
     */
    public function create()
    {
        return view('tweets.create');
    }
}
