<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-dylan-baton";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Exécuter une requête DELETE
if (isset($_GET['id'])) {
    $sql = "DELETE FROM projet WHERE id = " . $_GET['id'];
    $resultat = mysqli_query($connexion, $sql);
}


// Exécuter une requête SELECT
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
    <link rel="stylesheet" href="../css/realisation.css">
    <link rel="shortcut icon" href="favicon.ico" type="">
    <title>Document</title>
</head>
<body>
    <a href="realisation-ajout.php">Ajouter un contenu</a>
    <a class="boutonretouaccueil" href="../page-admin.html">page gestion</a>
    <h1 class="titrepage">realisations liste</h1>
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
                            <img class="modif-image" src="../' . $projet['image'] . '" alt="Project Image">
                        </div>
                        <a href="realisation-liste.php?id=' . $projet['id'] . '">supprimer projet</a>
                        <a class="bouton-admin" href="realisation-modifier.php?id=' . $projet['id'] . '">modifier projet</a>
                    </div>                    
                ';
            }
        ?>
    </div>
</body>
</html>