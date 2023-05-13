@extends('layouts.article')



@section('main')

@if($errors->any())
        <div>
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
        </div>
    @endif

<h1 class = "font-thin">Articles>Edit article here</h1>

<form action="{{route('articles.update',$article)}}" method="post">
    @csrf
    @method('patch')
    <div class="field my-2">
        <label for="">Title</lable>
        <input type="text" name="title" value="{{$article->title}}" class="border border-gray-300 p-2">
    </div>
    <div class="field my-2">
        <label for="">Content</lable>
        <textarea name="content">{{$article->content}}</textarea>
    </div>
    <div class="field">
        <button type="submit">Update!</button>
    </div>
</form>

@endsection