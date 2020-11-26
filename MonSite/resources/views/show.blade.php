@extends('layout')

@section('main')
	@if(isset($messageErreur))
	{{ $messageErreur }}
	@else
	<h1 class="titre" >Vous avez choisi {{ $jeux->libelle }} </h1>

	<div class="description">
		<div class="imageGame">
			<img src='/storage/images/{{ $jeux->image }}' width="500em">
		</div>

		<div class="textDescription">
			<p>Prix : {{ $jeux->prix }}€</p>
			<p>Sortie : {{ $jeux->dateSortie }}</p>
			<p>Description : {{ $jeux->description }}</p>
		</div>

		<div>
			<button>Précédent</button>
			<button>Suivant</button>
		</div>
	</div>
	@endif
@endsection