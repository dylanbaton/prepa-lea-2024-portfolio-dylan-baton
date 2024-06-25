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
$sql = "SELECT * FROM projet";
$resultat = mysqli_query($connexion, $sql);

if(isset($_POST['titre'])){
    echo 'le formulaire a été soumis correctement';
    $titre = mysqli_real_escape_string($connexion, $_POST['titre']);
    $description = mysqli_real_escape_string($connexion, $_POST['description']);
    $image = mysqli_real_escape_string($connexion, $_POST['image']);
    
    $sql= "INSERT INTO projet(`titre`, `description`, `image`) VALUES ('$titre','$description','$image')";
    echo $sql;
    mysqli_query($connexion, $sql);
}

// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
echo "Connexion réussie à la base de données.";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/realisation-ajout.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="content">   
            <form class="formulaire" action="" method="post">
                
                <h2 class="titre-block">Formulaire-ajout</h2>
               
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre">

                <label for="description">Description</label>
                <textarea type="text" id="description" name="description"></textarea>

                <label for="image">Image</label>
                <input type="text" id="image" name="image">

                <button class="bouton-envoyer" type="submit">Envoyer</button>
                <a class="bouton-admin" href="../realisations.php">Réalisations</a>
                <a class="boutonretouaccueil" href="../page-admin.html">page gestion</a>

            </form>
        </section>
    </main>
</body>
</html>