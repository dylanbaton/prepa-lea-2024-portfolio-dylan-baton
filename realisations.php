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
                        <form class="bouton" action="realisation-detail.php" method="GET">
                            <input type="hidden" name="id" value="1">
                            <button type="submit">en savoir plus</button>
                        </form>
                    </div>                    
                ';
            }
        ?>
    </div>
    <!-- <form class="bouton" action="realisation-detail.php" method="GET">
        <input type="hidden" name="id" value="2">
        <button type="submit">en savoir plus</button>
    </form> -->
    <footer>
        <div class="prenom">
            <small>By Dylan.</small>  
        </div>
        
        <div class="liste-footer">
            <a href="index.html">accueil</a>
            <a href="realisations.html">realisations/projets</a>
            <a href="mon-cv.php">mon cv</a>
            <a href="contact.html">contact</a>
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
