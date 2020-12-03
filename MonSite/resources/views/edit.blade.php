@extends('layout')

@section('main')

	<form method="POST" action="/Games/{{ $jeu->id }}" class="form_create" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<input type="text" name="libelle" value="{{ $jeu->libelle }}"><br>
		<input type="number" name="prix" value="{{ $jeu->prix }}"><br>
		<input type="date" name="dateSortie" value="{{ $jeu->dateSortie }}"><br>
		<img src='/storage/images/{{ $jeu->image }}' width="200em"><br>
		<input type="file" name="filename"><br>
		<textarea name="description" rows="10" cols="80" value="{{ $jeu->description }}"></textarea><br><br>
		<button>Valider</button><br>
	</form>

@endsection
