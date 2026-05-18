@extends("layouts/posts")

@section("title", $post->title)

@section("content")
<div class="d-flex py-4 gap-3">
    <a class="btn btn-outline-primary" href="{{route("posts.edit", $post)}}">Modifica</a>


    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Elimina
    </button>
</div>


<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Tipo</th>
            <th scope="col">Contenuto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->author }}</td>
            <td>{{ $post->type->name }}</td>
            <td>{{ ($post->content) }}</td>
        </tr>
    </tbody>
</table>

<h3>Tecnologie usate:</h3>
<div>
    @foreach ($post->technologies as $technology)
        <span class="badge" style="background-color: {{$technology->color}}">{{ $technology->name }}</span>
    @endforeach
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare il post?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route("posts.destroy", $post)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" class="btn btn-outline-danger" value="Elimina">

                </form>
            </div>
        </div>
    </div>
</div>

@endsection