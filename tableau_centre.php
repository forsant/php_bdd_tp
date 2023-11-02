<body>
<main>
<style>
    table, .toto{
    border-collapse: collapse;
    }
    table, th, td {
    border: 1px solid black;
    }
    
</style>
<?php
$tb = ['Paris','Londre','Rome','Berlin'];
//Affiche la case du tableau 0
echo "Affiche case du tableau 0 -->".$tb[1]."<br>"."<br>";
//Affiche toutes les cases du tableau
echo "Affiche toutes les cases du tableau"."<br>";
for($i=0;$i<count($tb);$i++){
    echo $tb[$i],"<br>";
}
echo "<br>";


echo "<br><br>";
echo "<b>-----------------------------------------------------------  LE CODE  ----------------------------------------------------<b><br><br>";
echo '<img src="code-tableau-associatif-1.png" alt="mon image" />';
echo '<br><br>';
echo  'Tableau Associatif la => veux dire associé à';
echo  'Exemple Paris c\'est la clé et France c\'est la valeur';
echo "<br><br>";

//Tableau Associatif la => veux dire associé à

// Exemple 'Paris' c'est la clé et 'France' c'est la valeur

$tab = [
'Paris'=>'France',
'Paris'=>'France',
'Rome'=>'Italie',
'Berlin'=>'Allemagne',
'Berne'=>'Suisse'
];

//Affiche la valeur de la clé Berlin
echo "Affiche la valeur de la clé Berlin ou la clé ['Berlin]='Allemagne' la Valeur ";
echo $tab['Berlin']."<br><br>";

var_dump ($tab['Berlin']);
'<br><br>';
//parcourir un tableau il faut utiliser la boucle foreach
echo "Parcourir un tableau avec foreach<br><br>";
foreach($tab as $ville=>$pays){
    echo$ville."->".$pays."<br>";
}





// création du tableau de 9 éléments

for ($i=0;$i<=10;$i++){
    $tab2[$i] = pow(2,$i);
}
    //$val = "une valeur";
    // echo $val, "<br>";
    //lecture des valeurs du tableau
    //echo "Les puissance de 2 sont : ", "<br>";
    foreach($tab2 as $val){
        echo $val." : ";
}

echo "<br><br>";
echo "<b>-----------------------------------------------------------  LE CODE  ----------------------------------------------------<b><br><br>";
echo '<img src="code-tableau-associatif.png" alt="mon image" />';

echo "<br><br>";

//AFFICHER LES VALEURS D'UN TABLEAU ASSOCIATIF

//Création d'un tableau associatif dont les clés sont les identifiants et associé à chacun un code aléatoire
// compris entre 100 et 1000 puis lit et affiche les clés et les valeurs du tableau

//création du tableau
for($i=0;$i<=8;$i++){
    $tob["client ".$i]= rand(100,1000);
}

//Lecture des clés et des valeurs
foreach($tob as $cle=>$val){
    echo "Le login du "."<b>$cle</b> à le code <b>$val</b><br>";
}

echo "<br>";
echo "<br>";
for($i=0;$i<=10;$i++){
    $tab3[$i] = pow(2,$i);

}
//Lecture des indices et des valeurs

foreach($tab3 as $ind=>$val){
    echo"<br><br> 2 puissance $ind vaut $val ";
}

echo "Dernier indice ".$ind," , dernière valeur ",$val,"<br><br>";


//AFFICHER LES VALEURS D'UN TABLEAU
echo "<b>-----------------------------------------------------------  LE CODE  ----------------------------------------------------<b><br><br>";
echo '<img src="code2-tableau-php.png" alt="mon image" />';

$Teb = array(
    array ("<b>LIBRAIRIE</b>", "<b>TITRE</b>", "<b>REMISE</b>"),
    array ("FNAC", "GOOGLE SHEET", "40%"),
    array ("FNAC", "EXCEL", "40%"),
    array ("EXPRESS", "GOOGLE", "38%"),
    array ("EXPRESS", "GOOGLE SLIDES", "40%")
);

    echo "<table border='1' width=\"50%\" class='toto'>";
    //lecture de chaque ligne
    foreach($Teb as list($librairie, $titre, $remise)){
//j'affiche les donnees dans des cases d'un tableau

echo "<tr><td>".$librairie."</td>"."<td>".$titre."</td>"."<td>".$remise."</td></tr>";
};   
echo "</table>";
echo "<br><br>";

//Autre code ******************************************************************************************


echo "<b>-----------------------------------------------------------  LE CODE  ----------------------------------------------------<b><br><br>";
echo '<img src="code-tableau-php.png" alt="mon image" />';

//AFFICHER LES VALEURS D'UN TABLEAU
$Teb = array(
    array ("<b>LIBRAIRIE</b>", "<b>TITRE</b>", "<b>REMISE</b>"),
    array ("FNAC", "GOOGLE SHEET", "40%"),
    array ("FNAC", "EXCEL", "40%"),
    array ("EXPRESS", "GOOGLE", "38%"),
    array ("EXPRESS", "GOOGLE SLIDES", "40%")
);

echo "<table border='1' width='50%'>"; // Utilisation de simples guillemets autour des attributs HTML
// Lecture de chaque ligne
foreach ($Teb as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


//***************************************************************************************************** */
echo'<br><br>';
echo "<b>Tableau avec des listes</b>";
echo '<br><br>';

echo "<b>-----------------------------------------------------------  LE CODE  ----------------------------------------------------<b><br><br>";
echo '<img src="code-tableau-php.png" alt="mon image" />';
$tablo[1] = "pomme";
$tablo[2] = "poire";
$tablo[3] = "orange";
$tablo[4] = "cerise";
$tablo[5] = "mangue";

//Je relie les éléments en les affichant dans le browser
echo '<br>';
echo 'Je relie les éléments en les affichant dans le browser';
echo '<br>';
echo 'Je prépare une liste numérotée';

echo "<ol>"; // je prépare une liste numérotée
for($i=0;$i<=5;$i++){
    echo "<li>".$tablo[$i]."</li>"; // j'affiche chaque élément du tableau
}
echo "</ol>";
echo '<br><br>';

$tablo1[1] = "stylo";
$tablo1[2] = "crayon";
$tablo1[3] = "gomme";
$tablo1[4] = "règle";
$tablo1[5] = "règle";

// Je relie les éléments en commençant à 0
for($i=0;$i<count($tablo1);$i++){
    echo $tablo[$i]."<br>"; // j'affiche chaque élément du tableau
}
$tablo2=["voirure","velo","moto","camion","bateau"];
echo "<br>";
print_r($tablo2);//c'est comme var_sump le print_r

/*
En résumé
Les tableaux sont des structures complexes à une ou plusieurs dimensuions. Un indice numérique ou text
permet de récupérer la valeur d'une case d'un tableau.Dans un indice nimérique, on utilise une boucle for ou while 
Dans le d'un indice de tyle text, il faut employer la boucle foreach.
Les tableaux servent aussi à organiser des matrices d'information que l'on récupère si besoin en les parcourant à l'aide
d'une ou plisieurs boucles.
*/



?>

    

</main>
</body>