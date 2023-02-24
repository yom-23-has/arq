<!DOCTYPE html>
<html>
<head>
	<title>Application d'analyse de risque</title>
</head>
<body>
	<h1>Application d'analyse de risque</h1>
	<form method="post" action="add.php">
		<label for="nom_risque">Nom du risque :</label>
		<input type="text" id="nom_risque" name="nom_risque" required><br><br>
		
		<label for="description">Description du risque :</label>
		<textarea id="description" name="description" required></textarea><br><br>
		
		<label for="probabilite">Probabilité :</label>
		<input type="number" id="probabilite" name="probabilite" min="1" max="10" required><br><br>
		
		<label for="impact">Impact :</label>
		<input type="number" id="impact" name="impact" min="1" max="10" required><br><br>
		
		<input type="submit" value="Ajouter le risque">
	</form>
</body>
</html>
