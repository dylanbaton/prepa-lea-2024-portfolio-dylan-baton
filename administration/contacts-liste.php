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

foreach ($resultat as $contact) {
    echo '
    <div class="">
        <div class="">
            <h3>'. $contact['nom_prenom'] .'</h3>
        </div>
        <div class="">
            <h3>'. $contact['email'] .'</h3>
        </div>
        <div class="">
            <h3>'. $contact['telephone'] .'</h3>
        </div>
        <div class="">
            <h3>'. $contact['message'] .'</h3>
        </div>
    </div> 
    ';
}
?>