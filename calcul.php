<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=arq', 'root', '');

// Récupération des données du risque sélectionné
$id_risque = $_POST['id_risque'];
$requete = $bdd->prepare('SELECT * FROM risques WHERE id = :id');
$requete->execute(array('id' => $id_risque));
$risque = $requete->fetch();

// Calcul du niveau de risque
$niveau_risque = $risque['probabilite'] * $risque['impact'];

// Détermination du niveau de probabilité et d'impact
if ($risque['probabilite'] >= 3) {
    $niveau_probabilite = "élevé";
} elseif ($risque['probabilite'] >= 1) {
    $niveau_probabilite = "moyen";
} else {
    $niveau_probabilite = "bas";
}

if ($risque['impact'] >= 2) {
    $niveau_impact = "élevé";
} elseif ($risque['impact'] >= 1) {
    $niveau_impact = "moyen";
} else {
    $niveau_impact = "bas";
}

// Affichage du résultat
echo "<h2>Niveau de risque pour le risque sélectionné :</h2>";
echo "<ul>";
echo "<li>Description du risque : " . $risque['description'] . "</li>";
echo "<li>Probabilité : " . $risque['probabilite'] . " (" . $niveau_probabilite . ")</li>";
echo "<li>Impact : " . $risque['impact'] . " (" . $niveau_impact . ")</li>";
echo "<li>Niveau de risque : " . $niveau_risque . "</li>";
echo "</ul>";
?>