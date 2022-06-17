@extends('layouts.app')

@section('content')


<div class="container w-50 mb-5">
    <h1> Create a new Card</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Puntare il form alla rotta POST store -->
    <form action="{{route('cards.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Titolo originale</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman: Three Jokers #1" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Enter the full title of the comic with the number here</small>
        </div>
        <div class="form-group">
            <label for="thumb">Link immagine</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://myimage.png" aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Type the thumb image path here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="series">Titolo del fumetto</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Batman: Three Jokers" aria-describedby="seriesHelper">
            <small id="seriesHelper" class="text-muted">Enter the title of the comic here</small>
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="2020-08-25" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Edizione</label>
            <input type="text" name="type" id="type" aria-describedby="typeHelper" class="form-control">
            <small id="typeHelper" class="text-muted">Enter the name of the edition here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add New Comic</button>

    </form>
</div>
@endsection