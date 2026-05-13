@extends('layouts/posts')

@section('title',"Aggiungi il tuo Post:")


@section("content") 
<form action="{{ route("posts.store")}}" method="POST" class="ms-5 mt-5">
    @csrf
    <div class="mt-3">
        <input type="text" id="titolo"  name="title" placeholder="Titolo">
    </div>
    <div class="mt-3">
        <input type="text" id="autore"  name="author" placeholder="Autore" >
    </div>
    <div class="mt-3">
        <select name="type_id" id="type_id" >
            @foreach ($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <textarea type="text" id="contenuto"  name="content" placeholder="Contenuto" rows="5"></textarea>
    </div>

    <input type="submit" value="Save">
@endsection