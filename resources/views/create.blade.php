@extends('layout/app')

@section('content')
  
  <form action="/store" method="post">

    @csrf

    <div class="card">
      <label for="">Auteurs</label>
      <select name="author_id" id="author_id">
        @foreach ($authors as $author)
          <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
        @endforeach
      </select>
      <label for="">Citation</label>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
      <button type="submit">Valider</button>    
</div>
  
  </form>

@endsection