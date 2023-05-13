@extends('layouts.article')

@section('main')

<h1 class = "font-thin">ExtendsList Here</h1>
<a href="{{route('articles.create')}}">Add New</a>

@foreach($articles as $article)
     <h1>{{$article->title}}</h1>
     <p>{{$article->created_at}} shared by {{$article->user->name}}</p>
    <a href="{{route('articles.edit',$article)}}">Edit</a>
@endforeach
{{$articles->links()}}
@endsection