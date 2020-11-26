@extends('layout')

@section('main')
	<h1>-99% sur tous les jeux no fake :</h1>

	<ul>
	@foreach($jeux as $jeu)
		<li><a href="/Games/{{$jeu->id}}">{{ $jeu->libelle }}</a> </li>
	@endforeach
	</ul>

@endsection