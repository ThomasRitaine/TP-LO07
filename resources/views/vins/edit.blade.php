@extends('layouts.app')

@section('content')

<h1>Editer le vin "{{ $vin->cru }}"</h1>


<form action="{{ '/vins/'. $vin->id }}" method="POST">
    
    @method("PATCH")

    @include('partials.vinForm')

    <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>

</form>

@endsection