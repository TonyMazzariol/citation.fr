@extends('layout/app')

@section('content')

<span>Liste de Citations</span>

@foreach ($quotes as $quote)

<div class="card">

  <div class=""><a href="/authors/{{ $quote->authors_id }}">{{ $quote->authors->first_name }} {{ $quote->authors->last_name }}</a></div>
  <div class="">{{ $quote->content }}</div>
      
</div>

@endforeach

<div class="pagination">{{ $quotes->links() }}</div>

@endsection