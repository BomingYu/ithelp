@extends('layouts.article')

@section('main')

<h1 class = "font-thin">Articles>Add new article here</h1>

<form action="{{route('articles.store')}}" method="post">
    @csrf
    <div class="field my-2">
        <label for="">Title</lable>
        <input type="text" name="title" class="border border-gray-300 p-2">
    </div>
    <div class="field my-2">
        <label for="">Content</lable>
        <textarea name="content"></textarea>
    </div>
    <div class="field">
        <button type="submit">Add!</button>
    </div>
</form>

@endsection