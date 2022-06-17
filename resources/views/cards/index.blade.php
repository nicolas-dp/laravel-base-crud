@extends('layouts.app')

@section('content')

<div class="container">
    <div class="heading d-flex justify-content-between align-items-center">
        <h1 class="p-5">Comics</h1>
        <div>
            <a class="btn btn-primary d-block" href="{{route('cards.create')}}">Create Comics</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Thumb</th>
                <th>Description</th>
                <th>Price</th>
                <th>Series</th>
                <th>Data di vendita</th>
                <th>Edizione</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach($cards as $card)
            <tr>
                <td scope="row">{{$card->id}}</td>
                <td>{{$card->title}}</td>
                <td><img width="50" src="{{$card->thumb}}" alt=""></td>
                <td>{{$card->description}}</td>
                <td>{{$card->price}}</td>
                <td>{{$card->series}}</td>
                <td>{{$card->sale_date}}</td>
                <td>{{$card->type}}</td>
                <td>
                    <a href="{{route('cards.show', $card->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </svg>
                    </a>
                    <a href="{{route('cards.edit', $card->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                    <!-- <a href="has-confirm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </a> -->

                    <!-- <form method="post" action="{{route('cards.destroy', $card->id)}}" class="has-confirm" data-message="Delete this Thing?">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            ELIMINA
                        </button>
                    </form> -->

                    <!-- *******************************  BONUS ************************************************  -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        ELIMINA
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('cards.destroy', $card->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Elimina riga {{$card->id}} - {{$card->title}}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare il record selezionato?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection