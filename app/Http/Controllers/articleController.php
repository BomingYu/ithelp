<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class articleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
   
    public function index(){
        $articles=Article::all();
        return view('articles.index',['articles'=>$articles]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        $content=$request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        auth()->user()->articles()->create($content);
        //auth()->articles()->user()->create($content);
        return redirect('/index')->with('notice','article has added!');
    }
}
