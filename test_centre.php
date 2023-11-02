<body>
    <!--structures de boucles 
les stuctures conditionnnes . 
ternaires--> 
<!---LES STRUCTURES DE CONTROLE EN PHP--> 
<!--permettent d'exécuter des blocs en fonction d'une condition qui doit 
être vérifiée. On distingue les structures conditionnells (ou tests) et les 
if.. 
if, .else et elseif ou switch et les ternaires-->

<main>
    <div class="content">
        <h1>Test Condition PHP</h1>
<?php
$tarif = 2000;
$remise = 0.50;
$prix_net = $tarif*(1-$remise);
echo $prix_net;

if($prix_net >1500)
echo "<br> super";
elseif($prix_net>1000)
echo"<br> acceptable";
else
echo "<br> on signe oû ?";
echo "<br> <br> <br>";

//aplli_code_postal
echo "Début mon application code postal";
echo "<br> <br>";
$code_postale ="69100";
if(substr($code_postale,0,2)=="45")
echo " avec if et endif :Loiret";
elseif(substr($code_postale,0,2)=="75")
echo " avec if et endif :Paris";
elseif(substr($code_postale,0,2)=="69")
echo " avec if et endif :Lyon";
elseif(substr($code_postale,0,2)=="29")
echo " avec if et endif :Quimpère";
else
echo " avec if et endif :Province";


echo"<br> <br>";
//aplli_code_postal avec switch
$codepost="66350";
switch(substr($codepost,0,2)){
        case"69":
        echo" avec switch : Lyon";
        break;
        case"75";
        echo" avec switch :Paris";
        break;
        case"18";
        echo" avec switch :Paris";
        break;
        case"13";
        echo" avec switch :Marseille";
        default:
        echo" avec switch :ailleurs";
}
/* Avec le SWITCH, le code peut tester plusieurs cas les uns à la suite des autres. Mais switch ne peut tester que des égalités contrairement à if ... elsif 
    ..else oû les autres comparaison sont possibles . */

    echo "<br>";
    echo " // -------------------------------------------------------//";
    echo "<br>";
    // Test avec la condition ternaire
    /* Les condiions ternaire sont des expresssion dans lesquelles les conditions vraies oou fausse sint écrites sur une même ligne.*/

    $c_postal ="75008";
    echo substr($c_postal,0,2)=="75"? "Paris" : "Province";

    

?>
</main>

</body>
</html>