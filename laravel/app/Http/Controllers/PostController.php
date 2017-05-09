<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Http\Controllers\HomeController;

class PostController extends Controller
{
    public function index()
    {
    	
    	//return "index not relevant";
    }

    public function login()
    {
    	return view('login');
    }

    public function store(Request $data)
    {
    	$post = new Post;
    	$post->user_id = Auth::user()->id;
    	
    	if( $data->text == '' )
    	{
    		//nothing to do, redirect to homepage
    		return redirect('/home');
    	}
    	else
    	{	
    		$post->content = $data->text;
    		
    	}
    	$post->status = 'new';

    	//datum handling
    	if( $data->datepicker == '' )
  		{	
  			return redirect('/home');
    	}
    	else
    	{
    		$tempDate = date($data->datepicker);
    		$post->valid = date('Y-m-d', strtotime(str_replace('-', '/', $tempDate)));
    	}
    	$post->save();
    	return redirect()->to('/home'); 
    	
    }

    public function markDone(Request $req)
    {

    	$data = Post::find($req->done_id); 
    	$data->status = "done";
    	$data->save();

		return redirect()->to('/home'); 
    }

    public static function get_posts()
    {
        $posts = Post::where("user_id", "=", Auth::user()->id)->get();
        return $posts;
    }
}
