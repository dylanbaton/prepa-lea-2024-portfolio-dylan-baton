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

// if(isset($_POST['titre'])){
//     $titre = mysqli_real_escape_string($connexion, $_POST['titre']);
//     $description = mysqli_real_escape_string($connexion, $_POST['description']);
//     $image = mysqli_real_escape_string($connexion, $_POST['image']);
    
//     $sql= "INSERT INTO projet( titre, description, image) VALUES ('$titre','$description','$image')";
//     mysqli_query($connexion, $sql);
// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<?php
                       foreach ($resultat as $projet) {
                            echo '
                        <div class="">
                           <div class="">
                                <h1>'. $projet['titre'] .'</h1>
                            </div>
                            <div class="">
                                <p>'. $projet['description'] .'</p>
                            </div>
                            <div class="">
                                <img src="../prepa-lea-2024-portfolio-dylan-baton/images/projet/Capture -d’écran-dylan.png"'. $projet['image'] .'>
                                <img src="../prepa-lea-2024-portfolio-dylan-baton/images/projet/Capture-d’écran-dylan-2.png"'. $projet['image'] .'>
                                <img src="../prepa-lea-2024-portfolio-dylan-baton/images/projet/Capture-d’écran-dylan-3.png"'. $projet['image'] .'>
                            </div>
                        </div> 
                            ';
                       }
                    ?>
</body>
</html>