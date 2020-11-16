@extends('layouts.app')

@section('content')

<h1>Sélectionner un producteur par son ID</h1>

<form action="/producteurs" method="POST">
  @csrf

  <select class="browser-default custom-select" name="producteur_id">

    @foreach ($listeProducteurs as $producteur)
      <option value="{{ $producteur->id }}">n°{{ $producteur->id }} - {{ $producteur->prenom }} {{ $producteur->nom }}</option>
    @endforeach
    
  </select>

  <button type="submit" class="btn btn-primary">Voir les vins du producteur</button>

</form>

@endsection