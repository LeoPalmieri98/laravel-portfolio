@extends('layouts/posts')

@section('title')
    
@section("content")

<div class="container mt-5">
    <h2 class="mb-4">Lista dei Post</h2>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Contenuto</th>
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
                    </tr>
                @endforeach

            </tbody>
        </table>
@endsection