<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
Use Log;

class TweetController extends Controller{

    public function __construct()
    {
        $this->middleware('auth')->except(['top']);
    }

    public function top(){
        $tweets = Tweet::orderBy('created_at','desc')->get();

        return view('tweet.top', ['tweets' => $tweets
        ]);
    }

    public function create(Request $request){
        Tweet::create([
            'user_id' => Auth::user()->id,
            'tweet' => $request->tweet
        ]);
        return back();
    }
}