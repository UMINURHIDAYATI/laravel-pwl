<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;


class Home1Controller extends Controller
{
    public function index(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
        return view('Home1')->with(compact('article'));
    }
}
