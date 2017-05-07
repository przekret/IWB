<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function index()
    {
    	return "index not relevant";
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
