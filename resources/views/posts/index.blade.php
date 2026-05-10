@extends('layouts/posts')

@section('title',"Lista dei Post:")
    
@section("content")

<div class="container mt-5">

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Link</th>
                    
                </tr>
            </thead>
            <tbody>
                

                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->category }}</td>
                        <td>{{ ($post->content) }}</td>
                        <td>
                           <a class="btn btn-dark" href="{{ route("posts.show", $post->id)}}">Visualizza</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
@endsection