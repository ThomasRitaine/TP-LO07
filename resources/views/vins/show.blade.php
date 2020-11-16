@extends('layouts.app')

@section('content')

<h1>{{$vin->cru}}</h1>

<hr />

<p><strong>Année :</strong> {{ $vin->annee }}</p>
<p><strong>Degré :</strong> {{ $vin->degre }}</p>

<hr />

<a href="/vins/{{ $vin->id }}/edit" class="btn btn-secondary" style="margin:5px;">Editer</a>

<form action="/vins/{{ $vin->id }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>


@endsection