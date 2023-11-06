<main>
    <h2>Formulaire PHP</h2>
    <br/>
    <form method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="nom">Email :</label>
        <input type="text" name="email" id="email" required><br><br>

        <label for="message">Message :</label>
        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Soumettre">
    </form>


<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "mon-formulaire";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}


// Vérifie si l'élément avec la clé 'nom' dans le tableau associatif $nom est défini
if (isset ($_POST['nom']))
{
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];
// Insertion des données dans la base de données
// INSERT INTO contact -> Insert dans la base de donnéés contact
$sql = "INSERT INTO contact (nom, prenom, email, message) VALUES ('$nom', '$prenom', '$email','$message')";
// Execution de la requette sql pour enregistrer les valeures dans la base de données
$connexion->query($sql);
}



// Fermer la connexion à la base de données
$connexion->close();


?>

</main>
