@extends('layouts.app')

@section('content')
<img class="img-fluid" src="{{$card->thumb}}" alt="{{$card->series}}">

<h1>{{$card->series}}</h1>
<div class="content">
  {{$card->description}}
</div>

@endsection