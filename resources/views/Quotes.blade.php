@extends('layout/app')

@section('content')

<span>Liste de Citations</span>

@foreach ($quotes as $quote)

<div class="card">

  <div class="">{{ $quote->authors->first_name }} {{ $quote->authors->last_name }}</div>
  <div class="">{{ $quote->content }}</div>
      
</div>

@endforeach

@endsection