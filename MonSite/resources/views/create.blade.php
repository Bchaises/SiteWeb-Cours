@extends('layout')

@section('main')

	<form method="POST" action="/Games" class="form_create">
		@csrf
		<input type="text" name="libelle" placeholder="libelle">
		<input type="number" name="prix" placeholder="prix">
		<button>Valider</button>
	</form>

@endsection