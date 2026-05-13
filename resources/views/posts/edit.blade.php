@extends('layouts/posts')

@section('title',"Modifica il tuo Post:")


@section("content") 
<form action="{{ route("posts.update", $post)}}" method="POST" class="ms-5 mt-5">
    @csrf
    @method("PUT")
    <div class="mt-3">
        <input type="text" id="titolo"  name="title" value="{{ $post->title}}">
    </div>
    <div class="mt-3">
        <input type="text" id="autore"  name="author" value="{{ $post->author}}" >
    </div>
    <div class="mt-3">
               <select name="type_id" id="type_id" >
            @foreach ($types as $type)
            <option value="{{$type->id}}"{{$post->type_id == $type->id ? "selected" : ""}}>{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <textarea type="text" id="contenuto"  name="content"  rows="5"> {{ $post->content}}"</textarea>
    </div>

    <input type="submit" value="Save">
@endsection