<!DOCTYPE html>
<html>
<head>
	<title>Cyberpunk</title>
	<link rel="stylesheet" type="text/css" href="/CSS/style_infoGame.css">
</head>
<body>
	<h1 class="titre" >Hello, vous avez choisi {{ $base[0] }}</h1>

	<div class="description">
		<div class="imageGame">
			<img src='/images/{{ $base[1] }}' width="500em">
		</div>

		<div class="textDescription">
			<p>Prix : {{ $base[3] }}</p>
			<p>Sortie : {{ $base[2] }}</p>
		</div>
	</div>
</body>
</html>