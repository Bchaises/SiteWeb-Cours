<!DOCTYPE html>
<html>
<head>
	<title>{{ $jeux->libelle }}</title>
	<link rel="stylesheet" type="text/css" href="/CSS/style_infoGame.css">
</head>
<body>
	<h1 class="titre" >Hello, vous avez choisi {{ $jeux->libelle }} </h1>

	<div class="description">
		<div class="imageGame">
			<img src='/images/{{ $jeux->image }}' width="500em">
		</div>

		<div class="textDescription">
			<p>Prix : {{ $jeux->prix }}</p>
			<p>Sortie : {{ $jeux->dateSortie }}</p>
		</div>
	</div>
</body>
</html>