@extends('layouts.article')

@section('main')

<h1 class = "font-thin">Article Showing</h1>

     <h2>
        {{$article->title}}
    </h2>
    <h3>
        {{$article->content}}
    </h3>

    <a href="{{route('articles.index')}}">Back To List</a>
    


@endsection