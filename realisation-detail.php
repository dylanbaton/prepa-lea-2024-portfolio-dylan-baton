<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-dylan-baton";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("La connexion a échoué: " . mysqli_connect_error());
}

// Récupérer l'id depuis l'URL
$id = $_GET['id'];

// Préparer une requête SQL
$sql = "SELECT * FROM projet WHERE id = $id";
$resultat = mysqli_query($connexion, $sql);

        foreach ($resultat as $projet) {
            echo '
                <div class="card">
                    <div class="titre">
                        <h1>' . $projet['titre'] . '</h1>
                    </div>
                    <div class="paragraphe">
                        <p>' . $projet['description_realisation_liste'] . '</p>
                    </div>
                    <div class="image">
                        <img src="' . $projet['image_realisation_liste'] . '" alt="Project Image">
                    </div>
                </div>
            ';
        }

// Fermer la connexion
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="bouton-admin" href="realisations.php">Réalisations</a>
</body>
</html>