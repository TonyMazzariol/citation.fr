@extends('layout/app')

@section('content')
  {{-- code here --}}
  
  <div class="card">
    
    <div class=""><a href="/authors/{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</a></div>
    <div class="">{{ $quote->content }}</div>
      
  </div>
  @auth()
  <div>
    <button><a href="/create" >Ajouter une nouvelle citation</a></button>
    <button>Supprimer</button>
    <button ><a href="quote/{{ $quote->id }}/edit">Modifier</a></button>
  </div>
  @endauth
  
@endsection