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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contacts-liste.css">
    <title>Document</title>
</head>
<body>
<a class="boutonretouaccueil" href="../index.html">Accueil</a>
<a class="boutonretouaccueil" href="../page-admin.html">page gestion</a>
    <div class="container">
        <?php    
            foreach ($resultat as $contact) {
                echo '
                <div class="container-infos">
                    <div class="nom">
                        <h1>'. $contact['nom_prenom'] .'</h1>
                    </div>
                    <div class="">
                        <p>'. $contact['email'] .'</p>
                    </div>
                    <div class="">
                        <p>'. $contact['telephone'] .'</p>
                    </div>
                    <div class="">
                        <p>'. $contact['message'] .'</p>
                    </div>
                </div>
                     
                ';
            }
        ?>
    </div>
</body>
</html>