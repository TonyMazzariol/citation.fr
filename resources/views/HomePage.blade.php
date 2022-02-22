@extends('layout/app')

@section('content')
  {{-- code here --}}
  
  <div class="card">
    
    <div class=""><a href="/authors/{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</a></div>
    <div class="">{{ $quote->content }}</div>
      
  </div>

@endsection