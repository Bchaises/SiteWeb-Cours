<!DOCTYPE html>
<html>
<head>
	<title>Games</title>
	<link rel="stylesheet" type="text/css" href="/CSS/style_games.css">
</head>
<body>
	<h1>Vente de jeux pas cher -99% no fake :</h1>

	<ul>
	@foreach($jeux as $jeu)
		<li><a href="/Games/{{$jeu->id}}">{{ $jeu->libelle }}</a> </li>
	@endforeach
	</ul>

</body>
</html>