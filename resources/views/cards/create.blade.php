@extends('layouts.app')

@section('content')


<div class="container w-50 mb-5">
    <h1> Create a new Card</h1>

    <!-- Non è necessario aggiungere partial.error poichè abbiamo il controllo dell'errore su ogni input -->
    <!--   @include('partials.error') -->
    <!-- Puntare il form alla rotta POST store -->
    <form action="{{route('cards.store')}}" method="post">
        @csrf


        <div class="form-group">
            <label for="title">Titolo originale</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Batman: Three Jokers #1" aria-describedby="titleHelper" value="{{old('title')}}">
            <small id="titleHelper" class="text-muted">Enter the full title of the comic with the number here</small>
            <!-- Error validation -->
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Link immagine</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://myimage.png" aria-describedby="thumbHelper" value="{{old('thumb')}}">
            <small id="thumbHelper" class="text-muted">Type the thumb image path here</small>
            <!-- Error validation -->
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" min="0" max="10000" step="1" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
            <!-- Error validation -->
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Titolo del fumetto</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Batman: Three Jokers" aria-describedby="seriesHelper" value="{{old('series')}}">
            <small id="seriesHelper" class="text-muted">Enter the title of the comic here</small>
            <!-- Error validation -->
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="text" name="sale_date" id="sale_date" placeholder="2020-08-25" class="form-control  @error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}">
            <!-- Error validation -->
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Edizione</label>
            <input type="text" name="type" id="type" aria-describedby="typeHelper" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}">
            <small id="typeHelper" class="text-muted">Enter the name of the edition here</small>
            <!-- Error validation -->
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5">
            {{old('description')}}
            </textarea>
            <!-- Error validation -->
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add New Comic</button>

    </form>
</div>
@endsection