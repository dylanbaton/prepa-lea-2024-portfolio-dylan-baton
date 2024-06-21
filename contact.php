<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "prepa-lea-2024-portfolio-dylan-baton";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// $_POST est t-il vide ?
if(isset($_POST['email'])){
    echo 'le formulaire a été soumis correctement';
    $nom_prenom = mysqli_real_escape_string($connexion, $_POST['nom']);
    $email = mysqli_real_escape_string($connexion, $_POST['email']);
    $telephone = mysqli_real_escape_string($connexion, $_POST['telephone']);
    $message = mysqli_real_escape_string($connexion, $_POST['message']);
    
    $sql= "INSERT INTO contact( nom_prenom, email, telephone, message) VALUES ('$nom_prenom','$email','$telephone','$message')";
    mysqli_query($connexion, $sql);
    header("Location: contact.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="favicon.ico" type="">
    <title>Formulaire</title>
</head>
<body>
   
    <nav class="navbar">
        <div class="liste">
            <a href="index.html">accueil</a>
            <a href="realisations.php">realisations/projets</a>
            <a href="mon-cv.html">mon cv</a>
            <a href="contact.html">contact</a>
        </div>  
    </nav>
     
    <main>
      <section class="content">   
            <form class="formulaire" action="" method="post">
                
                <h2 class="titre-block">Formulaire</h2>
               
                <label for="nom">Nom / Prénom*</label>
                <input type="text" id="nom" name="nom">

                <label for="email">E-mail*</label>
                <input type="text" id="email" name="email">

                <label for="telephone">Telephone*</label>
                <input type="text" id="telephone" name="telephone"></input>

                <label for="message">Message*</label>
                <textarea type="text" id="message" name="message"></textarea>

                <button class="bouton-envoyer" type="submit">Envoyer</button>
                <a class="bouton-admin" href="administration/contacts-liste.php">Admin</a>
            </form>
        </section>

        <section class="content">

            <h2 class="titre-block">Contact</h2>

            <p>
                <ul>
                    <li>Dylan Baton</li>
                    <li><a class="texte" href="mailto: dbaton@deastanceservices.fr">envoyer un mail</a></li>
                    <li><a class="texte" href="https://www.linkedin.com/in/dylan-baton-355381249/" target="_blank">linkedin: Dylan Baton</a></li>
                </ul>
            </p>
        </section>
    </main> 
    
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
           <img src="images/footer/image-email.png" alt="linkedin"></a>

           <a href="https://www.linkedin.com/in/dylan-baton-355381249/" target="_blank">
           <img class="icon" src="images/footer/pointer_linkedin_pin_location_logo_icon_255322 (1).png" alt="linkedin"></a>

           <!-- <a href="https://www.lecoleatypique.fr/" target="_blank">
           <img class="icon icon-atypique" src="icons/formulaire/icon-atypique.jpg" alt=""></a>  -->
        </div>
    </footer>   
</body>
</html>