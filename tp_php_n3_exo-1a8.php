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


/**----------------------------------------------------------------------------------------------- */

echo "<h3><b>Exercice 1</b></h3>";
echo "<b>Expression conditionnelle pour tester si un nbre est a la fois un multiple de 3 et 5<br/><br/></b>";
echo '<img src="images/tp_php_n_6.png"><br/><br/>';

$nombre = 15; // Remplacez 15 par le nombre que vous souhaitez tester

if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "$nombre est un multiple de 3 et 5.";
} else {
    echo "$nombre n'est pas un multiple de 3 et 5.";
}

/**---------------------------------------------------------------------------------------------------- */

echo "<h3><b>Exercice 2</b></h3>";
echo "<b>Expression conditionnelle utilisant \$age et \$sexe avec if <br/>";
echo "selectionne sexe feminin et age entre 21 et 10 ans et message de bienvenue approprié<br/><br/></b>";
echo '<img src="images/tp_php_n_7.png"><br/><br/>';

$age = 20; 
$sexe = "féminin";

if ($sexe == "féminin" && $age >= 10 && $age <= 21) {
    echo "Bienvenue, jeune femme ! Vous avez entre 10 et 21 ans.";
} else {
    echo "Désolé, cette condition n'est pas remplie.";
}

/**---------------------------------------------------------------------------------------------------- */

echo "<h3><b>Exercice 3</b></h3>";
echo "<b>Suite de tirage de nombre aléatoires jusqu'à une suite d'un nombre pair et de deux nombres impaires<br/>";
echo '<img src="images/tp_php_n_8.png"><br/><br/>';

$sequence = []; // Crée un tableau vide pour stocker la séquence de nombres.

while (count($sequence) < 3 || !($sequence[count($sequence) - 3] % 2 == 0
    && $sequence[count($sequence) - 2] % 2 == 1 && $sequence[count($sequence) - 1] % 2 == 1))
{
    // Génère un nombre aléatoire entre 1 et 100.
    $randomNumber = rand(1, 100);

    // Ajoute le nombre aléatoire à la séquence.
    $sequence[] = $randomNumber;
}

echo "Résultat finale : " . implode(', ', $sequence)."<br/><br/>";

/**---------------------------  Autre code avec do while ---------------------------------*/

echo '<img src="images/tp_php_n_9.png"><br/><br/>';

$sequence = [];

// Génération d'un nombre pair aléatoire
do {
    $randomNumber = rand(1, 100);// Génère un nombre aléatoire entre 1 et 100.

} while ($randomNumber % 2 != 0);// Ajoute le nombre aléatoire à la fin de la séquence.

$sequence[] = $randomNumber;

// Génération de deux nombres impairs aléatoires
for ($i = 0; $i < 2; $i++) {
    do {
        $randomNumber = rand(1, 100);
    } while ($randomNumber % 2 != 1);
    $sequence[] = $randomNumber;
}
/** La boucle continue tant que la séquence a moins de 3 éléments ou que les trois derniers
*éléments de la séquence ne forment pas la séquence souhaitée
*(un nombre pair suivi de deux nombres impairs).
*/
echo "Résultat finale : " . implode(', ', $sequence);

/**---------------------------------------------------------------------------------------------------- */

echo "<h3><b>Exercice 4</b></h3>";
echo "<b>Créer et afficher des numéros d'imat. (pour Paris) en commençant par 100 PHP 75</b><br/>";
echo '<img src="images/tp_php_n_10.png"><br/><br/>';

$numImmatriculation = "100 PHP 75"; // Numéro d'immatriculation initial

// Affiche les numéros d'immatriculation pour Paris en incrémentant à partir de 100
for ($i = 1; $i <= 10; $i++) { // Changez le nombre d'itérations selon vos besoins
    echo $numImmatriculation . " | ";
    
    // Incrémente le numéro d'immatriculation (en supposant que le numéro de départ soit sous forme de chaîne)
    $parts = explode(" ", $numImmatriculation);
    $numero = (int)$parts[0]; // Convertit la partie numérique en entier
    $numero++;
    $numImmatriculation = $numero . " " . $parts[1] . " " . $parts[2];
}
echo "<br/><br/>";

/** */
echo "<b>Même code en métant en réserve les numéros commençant par 100</b><br/>";
//echo '<img src="images/tp_php_n_11.png"><br/><br/>';


/**---------------------------------------------------------------------------------------------------- */

echo "<h3><b>Exercice 5</b></h3>";
echo "<b>Choisissez un nombre de 3 chiffres et aléatoirement tirer d'autre chiffres et compter le nombre de coup 
 pour obtenir le nombre du départ avec while<br/>";
echo '<img src="images/tp_php_n12.png"><br/><br/>';

$nombreDepart = rand(100, 999); // Choisit un nombre de 3 chiffres aléatoire
$nombreTire = null; // Initialise la variable pour stocker le nombre tiré
$essais = 0; // Initialise le compteur d'essais

while ($nombreTire !== $nombreDepart) {
    $nombreTire = rand(100, 999); // Effectue un tirage aléatoire
    $essais++; // Incrémente le compteur d'essais
}

echo "Le nombre de départ était : $nombreDepart<br>";
echo "Il a fallu $essais essais pour le trouver.<br/><br/>";

echo "<b>Choisissez un nombre de 3 chiffres et aléatoirement tirer d'autre chiffres et compter le nombre de coup 
 pour obtenir le nombre du départ avec for<br/>";
echo '<img src="images/tp_php_n13.png"><br/><br/>';

$nombreDepart = rand(100, 999); // Choisit un nombre de 3 chiffres aléatoire
$nombreTire = null; // Initialise la variable pour stocker le nombre tiré
$essais = 0; // Initialise le compteur d'essais

for (; $nombreTire !== $nombreDepart; $essais++) {
    $nombreTire = rand(100, 999); // Effectue un tirage aléatoire
}

echo "Le nombre de départ était : $nombreDepart<br>";
echo "Il a fallu $essais essais pour le trouver.<br/><br/>";


echo "<h3><b>Exercice 6</b></h3>";
echo "<b>Créer un tableau dont les indices varient de 11 à 36 et les valeurs sont des lettres de A à Z</b><br/>";
echo "Affiche le tabelau avec la boucle FOREACH<br/>";
echo '<img src="images/tp_php_n14.png"><br/><br/>';

$lettres = range('A', 'Z'); // Crée un tableau contenant les lettres de A à Z

$tableau = array(); // Initialise un tableau vide

// Remplit le tableau avec les lettres de A à Z, en utilisant les indices de 11 à 36
for ($i = 11, $j = 0; $i <= 36 && $j < count($lettres); $i++, $j++) {
    $tableau[$i] = $lettres[$j];
}

// Affiche le tableau avec une boucle foreach
foreach ($tableau as $indice => $lettre) {
    echo "$indice : $lettre";
    echo " | ";
   
}
echo " , <br/><br/>";
echo "<b>Créer un tableau dont les indices varient de 11 à 36 et les valeurs sont des lettres de A à Z";
echo "Affiche le tabelau avec la boucle FOR<br/>";
echo '<img src="images/tp_php_n15.png"><br/><br/>';
/** -------------------------  avec for */

$tableau = array(); // Initialise un tableau vide

$lettre = 'A'; // Initialise la première lettre à 'A'

for ($i = 11; $i <= 36; $i++) {
    $tableau[$i] = $lettre; // Associe l'indice à la lettre actuelle
    $lettre++; // Passe à la lettre suivante (par exemple, de 'A' à 'B', 'B' à 'C', etc.)
}

// Affiche le tableau avec une boucle for
for ($i = 11; $i <= 36; $i++) {
    echo "$i : " . $tableau[$i] . " | ";
}

$tableau = array(); // Initialise un tableau vide

for ($i = 11; $i <= 36; $i++) {
    $tableau[$i] = chr($i + 54); // Utilise chr() pour obtenir les lettres de A à Z
}

echo "<br/><br/>";

echo '<img src="images/tp_php_n16.png"><br/><br/>';
// Affiche le tableau avec les indices et les valeurs avec la fonction chr()
foreach ($tableau as $indice => $valeur) {
    echo "$indice : $valeur";
    echo " | ";
}
/** --------------------------------------------------------------------------------------------- */

echo "<h3><b>Exercice 7</b></h3>";
echo "<br/><br/>";
echo "<b>Utiliser une boucle while pour déterminer le premier entier par tirage au sort aléatoire</b>";
echo " qui soit un multiple d'un nombre donné<br/>";
echo '<img src="images/tp_php_n17.png"><br/><br/>';

$nombreDonne = 7; // Remplacez le nombre donné par celui de votre choix
$premierMultiple = null; // Initialisation de la variable pour stocker le premier multiple
$tirages = 0; // Initialisation du compteur de tirages

while ($premierMultiple === null) {
    $nombreAleatoire = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100
    $tirages++; // Incrémente le compteur de tirages

    // Vérifie si le nombre aléatoire est un multiple du nombre donné
    if ($nombreAleatoire % $nombreDonne === 0) {
        $premierMultiple = $nombreAleatoire; // Enregistre le premier multiple
    }
}

echo "Le premier multiple de $nombreDonne est $premierMultiple, obtenu après $tirages tirages aléatoires.";
echo "<br/><br/>";
echo '<img src="images/tp_php_n19.png"><br/><br/>';
/** --- Variante avec do while */

$nombreDonne = 7; // Remplacez le nombre donné par celui de votre choix
$premierMultiple = null; // Initialisation de la variable pour stocker le premier multiple
$tirages = 0; // Initialisation du compteur de tirages

do {
    $nombreAleatoire = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100
    $tirages++; // Incrémente le compteur de tirages

    // Vérifie si le nombre aléatoire est un multiple du nombre donné
    if ($nombreAleatoire % $nombreDonne === 0) {
        $premierMultiple = $nombreAleatoire; // Enregistre le premier multiple
    }
} while ($premierMultiple === null);

echo "Le premier multiple de $nombreDonne est $premierMultiple, obtenu après $tirages tirages aléatoires.";
echo "<br/><br/>";

echo "<h3><b>Exercice 8</b></h3>";
echo "<br/>";
echo "<b>Rechercher le PGCD (le plus grand commun diviseur)de deux nombres données</b>";
echo " <br/>";
echo '<img src="images/tp_php_n18.png"><br/><br/>';
function pgcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$a = 48; // Remplacez ces nombres par les nombres pour lesquels vous souhaitez calculer le PGCD
$b = 18;

$resultat = pgcd($a, $b);

echo "Le PGCD de $a et $b est $resultat.";
?>
