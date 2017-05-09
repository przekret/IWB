<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = PostController::get_posts();

        return view('home', compact('posts'));
    }

    //Static functions -------------------------------------------------------------------------------//
    public static function refresh()
    {
        $posts = PostController::get_posts();
        //return view('home', compact('posts'))->renderSections()['content'];
        return redirect()->to('/home'); 
    }



}
