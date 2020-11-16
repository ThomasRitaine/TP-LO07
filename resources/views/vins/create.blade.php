@extends('layouts.app')

@section('content')

<h1>Ajouter un vin</h1>

<form action="/vins" method="POST">

  @include('partials.vinForm')

  <button type="submit" class="btn btn-primary">Ajouter le vin</button>

</form>

@endsection