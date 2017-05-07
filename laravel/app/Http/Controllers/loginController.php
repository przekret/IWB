<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
    	return "leck mich am arsch";
    }

    public function login()
    {
    	return view('login');
    }

    public function store(Request $request)
    {
    	return $request->all();
    }
}
