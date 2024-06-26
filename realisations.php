<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-dylan-baton";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

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
    <link rel="shortcut icon" href="favicon.ico" type="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&family=Tapestry&display=swap" rel="stylesheet">
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

    <h1 class="titrepage">Mes realisations</h1>
    <div class="row">
        <?php
            foreach ($resultat as $projet) {
                echo '
                    <div class="card">
                        <div class="titrecard">
                            <h1>' . $projet['titre'] . '</h1>
                        </div>
                        <div class="paragraphe">
                            <p>' . $projet['description'] . '</p>
                        </div>
                        <div class="image">
                            <img class="modif-image" src="' . $projet['image'] . '" alt="Project Image">
                        </div>
                        <div class="bouton-savoir">
                            <a class="bouton" href="realisation-detail.php?id=' . $projet['id'] . '">En savoir plus</a>
                        </div>
                        
                    </div>                    
                ';
            }
        ?>
    </div>
    <footer>
        <div class="prenom">
            <small>By Dylan.</small>  
        </div>
        
        <div class="liste-footer">
            <a href="index.html">accueil</a>
            <a href="realisations.html">realisations/projets</a>
            <a href="mon-cv.php">mon cv</a>
            <a href="contact.html">contact</a>
            <a class="bouton-admin" href="administration/realisation-ajout.php">ajouter</a>
            <a class="bouton-admin" href="administration/realisation-liste.php">liste</a>
        </div>

        <div class="lien-reseaux">
            <a href="mailto: dbaton@deastanceservices.fr">
                <img src="images/footer/image-email.png" alt="linkedin">
            </a>
            <a href="https://www.linkedin.com/in/dylan-baton-355381249/" target="_blank">
                <img class="icon" src="images/footer/pointer_linkedin_pin_location_logo_icon_255322 (1).png" alt="linkedin">
            </a>
            <!-- <a href="https://www.lecoleatypique.fr/" target="_blank">
                <img class="icon icon-atypique" src="icons/formulaire/icon-atypique.jpg" alt="">
            </a> -->
        </div>
    </footer>
</body>
</html>
