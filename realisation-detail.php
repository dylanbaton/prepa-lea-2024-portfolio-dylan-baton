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

// Fermer la connexion
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/realisation-detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Tapestry&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
        <div class="liste">
            <a class="bouton-admin" href="realisations.php">retour aux réalisations</a>
        </div>  
    </nav>
    <div class="block">
        <?php
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
        ?>
    </div>
    
</body>
</html>