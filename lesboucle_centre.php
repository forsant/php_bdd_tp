<body>
<main>
        <!--structures de boucles 
les stuctures conditionnnes . 
ternaires--> 
<!---LES STRUCTURES DE CONTROLE EN PHP--> 
<!--permettent d'exécuter des blocs en fonction d'une condition qui doit 
être vérifiée. On distingue les structures conditionnells (ou tests) et les 
if.. 
if, .else et elseif ou switch et les ternaires-->
    <div class="content">
        <h1>Les Boucles</h1>
        <!-- Elles permettes d'exécuter plusieurs fois desblocs de code en fonction de la valeur d'une variable
        On distingue, les boucles while, for, foreach -->
<?php

// La boucle while
//Elle éxecute un bloc de ligne tant que la condition est vraie.
echo "<br>"
;$a=1;
// tant que la variable est inférieur à 10
while($a<=10){
    echo "<p>La valeur est : $a </p><br>";
    //j'incrémente la valeur de a
    $a++;
};
/*Notion d'incrémentation décrémentation*/
echo '<br>';
echo "<h1>Notion d' incrémentation décrémentation</h1>";
echo '<br>';
$x=20;
$y=12;
echo "<p>".$x."<p><br>";
echo $y.'<br>';
$x++;//incrémentation
$y--;//décrémentation
echo "<p>la variable $x est incrémentée et vaut : ".$x."</p>";
echo'<br>';
echo "<p> et $y est décrémentée et vaut maintenant : ".$y."</p>";


echo "<br> <br>";
// Je définis l'environnement en français
echo "<h1>BOUCLE DO WHILE</h1>"."<br>";

setlocale(LC_TIME, ['fr','fra','french']);
//j'initialise une variable
$nombre = 0;
//faire
do{
    //je récupère la date du jour avec un formatage et le nombre du jour
    $d1 = date("d/m/Y",strtotime('+'.$nombre.'days'));
    //j'affiche la date
    echo "<p>" . $d1."</p>";
    //j'incremente la variable
    $nombre++;
}
// tant que la variable est inferieur ou égale à 15
while($nombre <=15);

// La boucle for

// Elle indique de répéter une action un certain nombre de fois en fonction de la valeur d'un pointeur.
// La structure possède trois paramètres:
//Un début, un test et une incrémentation qui s'effectue à la fin de chaque passage dans la boucle.
echo "<h1>BOUCLE FOR</h1><br>";
for($p=0; $p<=5; $p++){
    echo "<p>Je dis bonjour avec la boucle de for : ".$p."<br></p>";
}

echo"<br>";echo"<br>";
echo"Les niveaux ce titre en html";

for ($i=1;$i<7;$i++){
    echo "<h$i> $i : Titre de niveau $i</h$i>";
echo "Je dis bonjour avec la boucle for : ".$p."<br>";

}


// La boucle foreach

echo"<br><br>";
echo"<h1>BOUCLE FOREACH</h1>";
$T["Janvier"]="école";
$T["Septembre"]="vacances";
foreach($T as $mois =>$region){
    echo "<p> $mois ==>".".$region.</p><br>";
}



// La boucle pour Tableau

  //  for($i=1;$i<10;$i++){
  //  echo "<span style=\"border-style:double;border-width:3;\">$i + $j=10</span>";

//}
echo "<br><br>";
echo "<h2> Révisez votre table de multiplication<h2>";

//Début du tableau
echo "<table border =\"2\" style=\"background-color:yellow\"><th>&nbsp; X &nbsp;</th>";
//créer une première ligne
for ($i=1;$i<=10;$i++){
    echo "<th>&nbsp; $i&nbsp;</th>";
}
//Créer la première colonne
    for ($i=1;$i<=10;$i++){
   echo "<tr><th>&nbsp; $i&nbsp;</th>";

// Rempli colonne par colonne le tableau
for ($j=1;$j<=10;$j++){
echo "<td style=\"background-color:red;color:white\">&nbsp;&nbsp;<b>".$i*$j."&nbsp;&nbsp;</b></td>";
 
    //fin de la boucle</td>
}
//echo "</tr>";
}
//fin de la boucle
echo "</table>";

?>
</main>
</body>