@extends('layouts.app')
@section('content')

<h1>{{$vin->cru}}</h1>
 
<hr />
 
<p><strong>Année :</strong> {{ $vin->annee }}</p>
<p><strong>Degré :</strong> {{ $vin->degre }}</p>

@endsection