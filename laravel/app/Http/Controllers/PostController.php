<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function index()
    {
    	return "index not relevant";
    }

    public function login()
    {
    	return view('login');
    }

    public function store(Request $data)
    {
    	$post = new Post;
    	$post->user_id = Auth::user()->id;
    	$post->content = $data->text;
    	$post->save();
    	
    	//return $data->all();
    }
}
