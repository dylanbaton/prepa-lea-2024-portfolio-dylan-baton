<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-dylan-baton";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
echo "Connexion réussie à la base de données.";
}

$sql = "SELECT * FROM projet";
$resultat = mysqli_query($connexion, $sql);
// Fermer la connexion
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/realisation.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
            <div class="liste">
                <a href="index.html">accueil</a>
                <a href="realisations.php">realisations/projets</a>
                <a href="mon-cv.html">mon cv</a>
                <a href="contact.php">contact</a>
            </div>  
        </nav>
        <div class="container">
            <?php
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
        </div>
</body>
</html>