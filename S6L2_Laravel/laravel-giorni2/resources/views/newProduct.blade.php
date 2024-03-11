@extends('template.layout')

@section('title', $title)
@section('content')

<form method="post" action="{{ route('products.store') }}">
    @csrf

  <div class="mb-3">
    <label for="nome" class="form-label">Nome prodotto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="descrizione" class="form-label">Descrizione</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>

@endsection