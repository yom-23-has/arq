<?php $bdd = new PDO('mysql:host=localhost;dbname=arq', 'root', ''); ?>

<!-- Interface HTML pour sélectionner le risque -->
<h2>Sélectionner un risque :</h2>
<form method="POST" action="calcul.php">
    <label for="id_risque">Risque :</label>
    <select name="id_risque">
        <?php
        // Récupération de la liste des risques dans la base de données
        $requete = $bdd->query('SELECT * FROM risques');
        while ($risque = $requete->fetch()) {
            echo "<option value='" . $risque['id'] . "'>" . $risque['description'] . "</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Calculer">
</form>