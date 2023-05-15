@extends('layouts.article')

@section('main')

<h1 class = "font-thin">ExtendsList Here</h1>
<a href="{{route('articles.create')}}">Add New</a>

@foreach($articles as $article)
     <h1 class="font-thin text-4x1">
        <a href="{{route('articles.show',$article)}}">
            {{$article->title}}
        </a>
    </h1>
     <p>{{$article->created_at}} shared by {{$article->user->name}}</p>

    <div class="field">
    <a href="{{route('articles.edit',$article)}}">Edit</a>
    <form action="{{route('articles.destroy',$article)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    </div>
@endforeach
{{$articles->links()}}
@endsection