
<main>
<h1>LES FONCTIONS EN PHP</h1>
<br>
   <?php 
   /*
   POUR EXECUTER UNE UNE FONCTION IL FAUT APPELER LA FONCTION PAR SON NOM
   On parle souvent de fonctions personnalisées quand on écrit soi-même les instructions mais on parle aussi de fonction
   PHP ou prédéfinies quand on utilise une commande effectue une tâche, comme par exemple "strval", "strtotime", ou d'autres encore.
    */
    // Création de la fonction anonyme bonjour
    echo "<b>Création Fonction anonyme bonjour</b><br>";
    echo '<img src="images/fonction_php_1.png" /><br>';
    function bonjour(){
        print('Salut Jean'); // Ce que va faire la fonction bonjour, print permet l'affichage
    }
    bonjour(); // Appel de la fonction
    echo "<br><br>";


    // Création de la fonction nommé bonjour1
    echo "<b>Création Fonction nommé bonjour1</b><br>";
    echo '<img src="images/fonction_php_2.png" /><br>';
    function bonjour1($prenom){ // On précise que la paramètre sera $prenom
        print('Salut '.$prenom); // Ici on appel la variable déclaré au moment de l'appel
    }
    bonjour1("Anissa"); // Appel de la fonction bonjour1 avec comme argument Anissa
    echo "<br><br>";

    // Opérateur numérique dans les fonctions

    echo "<b>Fonction pour faire une addition</b><br>";
    echo '<img src="images/fonction_php_3.png" /><br>';

    function addition($nbre1,$nbre2){
        $resultat = $nbre1+$nbre2;
        echo $nbre1.'+'.$nbre2.'=' .$resultat.'<br>';
    }
    addition(1,2);
    echo"<br>";

    echo "<b>Fonction pour calculer la tva</b><br>";
    echo '<img src="images/fonction_php_4.png" /><br>';
    function calculTva(){
        return 100*1.2;
    }
    //j'éxécute ma fonction calcultva en l'appelant
    echo "Résultat : ".calculTva().'<br><br>';


    echo "<b>Fonction calcul tva pour 500 et 2500 taux 20%</b><br>";
    function calculTva2($nombre){
    return $nombre*1.2;
    }

// Exécution de la fonction
echo calculTva2(500).'<br>';
echo calculTva2(2500).'<br>';

echo "<br>";
function calculTva3($montant,$taux){
    return $montant * $taux;

}
// executer notre fonction;
echo "caculTva3 pour 500 avec un taux de 5.5% font " . calculTva3(500,1.055).'<br>';
echo "caculTva3 pour 4000 avec un taux de 5.5% font " . calculTva3(4000,1.2).'<br>';
echo '<br>';


function afficherDate($jr, $mois, $annee){
    echo $jr. ' ',$mois, ' '.$annee;
}

echo '<img src="fonction_date.png" /><br><br>';
echo '<img src="affiche_date.png" /><br><br>';
// éxecution de la fonction
afficherDate(25, 'Octobre',2023);
echo'<br><br>';

echo '<img src="fonction_volume.png" /><br><br>';
function volume($largeur,$longueur,$hauteur){
    echo "Le volume est : ".$largeur*$longueur*$hauteur;
}
volume(10,10,10);
echo "<br>";

echo '<img src="variable en dehors.png" /><br><br>';
function test($nom){
    echo $nom;
}
/* echo $nom --> provoque une erreur car la variable
 de fonctionne pas en dehors de la fonction

 */
echo test('joh')."<br><br>";

/*
Toute variable définie dans une fonction avec le mot clé global sera considéré comme global et pour changer la valeur 
dans les diférens script
Toutes variables en dehors d'une fonction sont global
*/

function calcul_remise($h1){
    global $taux_remise;
    $taux_remise = 0.3;
    return $h1 * $taux_remise;
}
// je définis une fonction qui calcule la tva

function calcTVA($h2){
     global $taux_tva;
    $taux_tva=0.2;
    return $h2 * $taux_tva;
}
$ht = 100; // le hors taxe
//je récupère la remise déduite
$remise=calcul_remise($ht);
echo "La remise est  : ".$remise."<br>";

//je récupère la tva à ajouter
$tva=calctva($ht);
echo "La tva est :" .$tva."<br>";

//calcul ttc
$ttc=$ht-$remise+$tva;

//je récupère le ttc
echo "Le ttc est:".$ttc."<br><br>";


//ou

function cal_remise($h1){
    $taux_remise = 0.3;
    global $remise;
    $remise = $h1*$taux_remise;
}
function calcul_tva($h2){
    $taux_tva = 0.2;
    global $tva5;
    $tva5 = $h2*$taux_tva;
}

$ht5=100;

cal_remise($ht5);
calcul_tva($ht5);

$ttc5=$ht5+$tva5-$remise;

Echo "La tva est $tva5 la remise $remise et le ttc est $ttc5<br><br>";

echo '<img src="fonction_carre.png" /><br>';
function carre($c){
    echo "L'air du carré est :".$c*$c;
}
carre(2);
?>
</main>
