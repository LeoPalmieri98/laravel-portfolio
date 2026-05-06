@extends("layouts/posts")

@section("title", $post->title)

@section("content")
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
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->category }}</td>
                        <td>{{ ($post->content) }}</td>
                    </tr>
            </tbody>
        </table>
@endsection