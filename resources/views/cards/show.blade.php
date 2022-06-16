@extends('layouts.app')

@section('content')
<img class="img-fluid" src="{{$card->cover_image}}" alt="">

<h1>{{$card->title}}</h1>
<div class="content">
  {{$card->description}}
</div>

@endsection