<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::get();
        $comments=Comment::get();
        return view('home',compact('posts','comments'));
    }

    public function saveComment(Request $request){
        Comment::create([
           'comment'=>$request->post_comment,
           'user_id'=>Auth::id(),
           'post_id'=>$request->post_id,

        ]);
        ############# Event #################
        $data =[
            'comment'=>$request->post_comment,
            'user_id'=>Auth::id(),
            'post_id'=>$request->post_id,
        ];
        event(new NewNotification($data));
        ############ Event ###################
        return redirect()->back();
    }
}
