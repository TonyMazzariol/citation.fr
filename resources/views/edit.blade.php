@extends('layout/app')

@section('content')
  
  <form action="/quote/{{ $quote->id }}" method="post">
  
    @method('PUT')

    @csrf

    <div class="card">
      <label for="">Citation</label>
      <textarea name="content" id="content" cols="30" rows="10">{{ $quote->content }}</textarea>
      <button type="submit">Valider</button>    
</div>
  
  </form>

@endsection