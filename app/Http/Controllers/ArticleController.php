<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function index($id){
        $article = Article::find($id);
        return view('Article', ['id'=>$id])->with(compact('article'));
    }

    public function manage() {
        $article = Article::all();
        return view('manage',['article' => $article]);
    }

    public function add(){
        return view('addarticle');
    }
    public function create(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'imageurl' => $request->imageurl
        ]);
        return redirect('/manage');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->imageurl = $request->imageurl;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
}