@extends('layout')

@section('main')
	@if(isset($messageErreur))
	{{ $messageErreur }}
	@else
	<h1 class="titre" >Vous avez choisi {{ $jeu->libelle }} </h1>
	<div class="description">
	<table>
	
		<tr>
		<th>
			<div class="imageGame">
				<img src='/storage/images/{{ $jeu->image }}' width="500em">
			</div>
		</th>

		<th>
			<div class="textDescription">
				<p>Prix : {{ $jeu->prix }}€</p>
				<p>Sortie : {{ $jeu->dateSortie }}</p>
				<p>Description : {{ $jeu->description }}</p>
			</div>
		</th>
		</tr>

	</table>
		<div class="buttonDescription">
			<a href="/Games">Précédent</a>
			<a href="/Games/">Suivant</a>
			<a href="/Games/{{ $jeu->id }}/edit">Editer</a>
			<form method="post" action="/Games/{{ $jeu->id }}">
				@csrf
				@method('DELETE')
				<button class="" >Supprimer</button>
			</form>
		</div>
	</div>


	@endif
@endsection