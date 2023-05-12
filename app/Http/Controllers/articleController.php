<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    public function index(){
        return view('articles.index');
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
        return redirect('/index')->with('notice','article has added!');
    }
}
