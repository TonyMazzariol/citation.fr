@extends('layout/app')

@section('content')

<span>Liste de Citations de {{ $author->last_name }}</span>

@foreach ($quotes as $quote)

<div class="card">

  <div class="">{{ $quote->content }}</div>
      
</div>

@endforeach

@endsection