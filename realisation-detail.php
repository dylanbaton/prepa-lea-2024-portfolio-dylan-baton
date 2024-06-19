<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-dylan-baton";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Exécuter une requête SELECT
$sql = "SELECT * FROM contact";
$resultat = mysqli_query($connexion, $sql);
// Fermer la connexion
mysqli_close($connexion);

foreach ($resultat as $projet) {
    echo '
        <div class="card">
            <div class="titre">
                <h1>' . $projet['titre'] . '</h1>
            </div>
            <div class="paragraphe">
                <p>' . $projet['description'] . '</p>
            </div>
            <div class="image">
                <img src="' . $projet['image'] . '" alt="Project Image">
            </div>
        </div>
    ';
}
?>