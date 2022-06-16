@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @forelse($cards as $card)
        <div class="col">
            <div class="card">
                <img src="{{$card->thumb}}" alt="{{$card->series}}">
                <div class="card-body">
                    <h5>{{$card->series}}</h5>
                    <small>{{$card->title}} || ({{$card->type}})</small>
                    <div class="price">Price: <span class="badge bg-danger">{{$card->price}}</span></div>
                    <span>{{$card->sale_date}}</span>
                </div>
            </div>
        </div>

        @empty
        <p>Not card yet!</p>
        @endforelse
    </div>
</div>
@endsection