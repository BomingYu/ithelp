@extends('layouts.article')

@section('main')

<h1 class = "font-thin">Articles>Add new article here</h1>

<form action="{{route('articles.store')}}" method="post">
    @csrf
    <div class="field my-2">
        <label for="">Title</lable>
        <input type="text" name="title" value="{{old('title')}}" class="border border-gray-300 p-2">
    </div>
    <div class="field my-2">
        <label for="">Content</lable>
        <textarea name="content" class="border border-gray-300 p-2">{{old('content')}}</textarea>
    </div>
    <div class="field my-2">
        <button type="submit" class="px-3 py-1 rounded bg-gray200 hover:bg-gray-300">Add!</button>
    </div>
</form>

@endsection