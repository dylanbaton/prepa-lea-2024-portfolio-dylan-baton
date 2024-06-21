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
$sql = "SELECT * FROM projet WHERE id = ?";
$stmt = mysqli_prepare($connexion, $sql);

if ($stmt) {
    // Lier les variables aux paramètres de la requête
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Exécuter la requête
    mysqli_stmt_execute($stmt);

    // Obtenir le résultat de la requête
    $resultat = mysqli_stmt_get_result($stmt);

    // Vérifier si des résultats ont été trouvés
    if (mysqli_num_rows($resultat) > 0) {
        // Parcourir les résultats
        while ($projet = mysqli_fetch_assoc($resultat)) {
            echo '
                <div class="card">
                    <div class="titre">
                        <h1>' . htmlspecialchars($projet['titre'], ENT_QUOTES, 'UTF-8') . '</h1>
                    </div>
                    <div class="paragraphe">
                        <p>' . htmlspecialchars($projet['description'], ENT_QUOTES, 'UTF-8') . '</p>
                    </div>
                    <div class="image">
                        <img src="' . htmlspecialchars($projet['image'], ENT_QUOTES, 'UTF-8') . '" alt="Project Image">
                    </div>
                </div>
            ';
        }
    } else {
        echo "Aucun projet trouvé avec cet ID.";
    }

    // Fermer la déclaration
    mysqli_stmt_close($stmt);
} else {
    echo "Erreur lors de la préparation de la requête: " . mysqli_error($connexion);
}

// Fermer la connexion
mysqli_close($connexion);
?>
