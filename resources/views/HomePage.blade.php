@extends('layout/app')

@section('content')
  {{-- code here --}}
  
  <div class="card">
    
    <div class="">{{ $author->first_name }} {{ $author->last_name }}</div>
    <div class="">{{ $quote->content }}</div>
      
  </div>

@endsection