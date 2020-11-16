@extends('layouts.app')
@section('content')
<h1>Liste des vins</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cru</th>
        <th scope="col">Annee</th>
        <th scope="col">Degre</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($listeVins as $unVin)
        <tr>
            <th scope="row">{{ $unVin->id }}</th>
            <td>{{ $unVin->cru }}</td>
            <td>{{ $unVin->annee }}</td>
            <td>{{ $unVin->degre }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection