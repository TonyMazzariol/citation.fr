@extends('layout/app')

@section('content')
{{-- code here --}}
<span>Liste des Auteurs</span>

@foreach ($authors as $author)

  <div class="card">
    <div class=""><a href="/authors/{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</a></div>      
  </div>

@endforeach

<div class="pagination">{{ $authors->links() }}</div>

@endsection