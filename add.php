<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arq";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// Configuration de PDO pour générer des exceptions en cas d'erreurs SQL
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Récupération des données du formulaire
	$nom_risque = $_POST['nom_risque'];
	$description = $_POST['description'];
	$probabilite = $_POST['probabilite'];
	$impact = $_POST['impact'];

	// Insertion du risque dans la base de données
	$sql = "INSERT INTO risques (nom_risque, description, probabilite, impact)
			VALUES ('$nom_risque', '$description', $probabilite, $impact)";
	$conn->exec($sql);

	echo "Le risque a été ajouté avec succès.";
}
catch(PDOException $e) {
	echo "Erreur : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
