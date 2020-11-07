<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        return view('Info');
    }
    public function __construct()
	{
		$this->middleware('auth');
	}
}
