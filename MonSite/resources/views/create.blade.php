@extends('layout')

@section('main')

	<form method="POST" action="/Games" class="form_create" enctype="multipart/form-data">
		@csrf
		<input type="text" name="libelle" placeholder="libelle"><br>
		<input type="number" name="prix" placeholder="prix"><br>
		<input type="date" name="dateSortie"><br>
		<input type="file" name="filename"><br>
		<textarea name="description" rows="4" cols="50" ></textarea><br><br>
		<button>Valider</button><br>
	</form>

@endsection