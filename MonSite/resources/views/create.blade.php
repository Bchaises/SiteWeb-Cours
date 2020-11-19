<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="style_create.css">
</head>
<body>

	<form method="POST" action="infogame.blade.php">
		<label>Nom du jeu :</label>
		<input type="text" name="jeu"><br>
		<label>Image de la jaquette de jeu :</label>
		<input type="image" name="image"><br>
		<label>Prix du jeu :</label>
		<input type="number" name="prix">
	</form>

</body>
</html>