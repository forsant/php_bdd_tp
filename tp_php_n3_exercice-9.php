<main>
<h1>------------- TP_PHP_N3 -----------------</h1>
<br>

<?php
echo "<h3><b>Exercice 9</b></h3>";
echo "<b>1.Se connecter à la base de donnée casse2<br/><br/></b>";
echo '<img src="images/connexion-base-casse2.png"><br/><br/>';

$cnx = mysqli_connect("localhost", "root", "", "casse2");

if (mysqli_connect_errno()) {
    echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
} else {
    echo "Connexion à la base de données réussie<br><br>";

/**----------------------------------------------------------------------------------------------- */

echo "<b>2.Afficher toutes les personnes qui vivent à Paris ou à Bordeaux<br/><br/></b>";
echo '<img src="images/requette-php-base2.png"><br/><br/>';

// Requête SQL pour sélectionner les personnes vivant à Paris ou Bordeaux
$sql = "SELECT * FROM personne WHERE ville IN ('Paris', 'Bordeaux')";

// Exécution de la requête
$resultat = mysqli_query($cnx, $sql);

// Affichage des résultats
// Bien respecter les lettres capitales et minuscules
if ($resultat) {
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "Nom : " . $row['Nom'] . ", Ville : " . $row['Ville'] . "<br>";
    }
} else {
    echo "Erreur d'exécution de la requête : " . mysqli_error($cnx);
}

// Fermez la connexion lorsque vous avez terminé.
mysqli_close($cnx);
}
echo "<br/><br/>";

/**-------------------------------------------------------------------------------------------- */

echo "<b>3.Afficher toutes les personnes dont l'age est compris de 25 et 40ans<br/><br/></b>";
echo '<img src="images/requette-php-base3.png"><br/><br/>';

$cnx = mysqli_connect("localhost", "root", "", "casse2");

if (mysqli_connect_errno()) {
    echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
} else {
    echo "Connexion à la base de données réussie<br><br>";

// Requête SQL pour sélectionner les personnes dont l'age est compris de 25 et 40 ans
$sql = "SELECT Nom, Age FROM personne WHERE Age >= 25 and Age <=40";

// Exécution de la requête
$resultat = mysqli_query($cnx, $sql);

// Affichage des résultats
// Bien respecter les lettres capitales et minuscules
if ($resultat) {
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "Nom : " . $row['Nom'] . ", Age : " . $row['Age'] . "<br>";
    }
} else {
    echo "Erreur d'exécution de la requête : " . mysqli_error($cnx);
}

// Fermez la connexion lorsque vous avez terminé.
mysqli_close($cnx);
}
echo "<br/><br/>";

/**----------------------------------------------------------------------------------------------- */

echo "<b>3.Afficher toutes les personnes par ordre décroissant<br/><br/></b>";
echo '<img src="images/requette-php-base4.png"><br/><br/>';

$cnx = mysqli_connect("localhost", "root", "", "casse2");

if (mysqli_connect_errno()) {
    echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
} else {
    echo "Connexion à la base de données réussie<br><br>";

// Requête SQL pour afficher les peronnes par ordre décroissant
//$sql = "select * from personne order by nom asc";
$sql = "select * from personne order by nom desc";

// Exécution de la requête
$resultat = mysqli_query($cnx, $sql);

// Affichage des résultats
// Bien respecter les lettres capitales et minuscules
if ($resultat) {
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo $row['Nom']."<br/>" ;
    }
} else {
    echo "Erreur d'exécution de la requête : " . mysqli_error($cnx);
}

// Fermez la connexion lorsque vous avez terminé.
mysqli_close($cnx);
}
echo "<br/><br/>";

?>
