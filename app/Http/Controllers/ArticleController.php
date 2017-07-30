<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('post_on','desc')->paginate(3);
        //return $articles;
        return view('articles.index',compact('articles'));
    }

    
    public function create()
    {
        return view('articles.create');
    }


    public function store(Request $request)
    {
        Article::create($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
