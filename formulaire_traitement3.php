
<main>
<?php

foreach($_POST as $name=>$value){
    echo $name." ".$value."<br>";
}

echo "<h4>Sauvegarde les valeurs du formulaire sur fichier txt</h4>";
echo "<br/>";
echo '<img src="images/formulaire-1.png"/><br/><br/>';

print($value);

echo "<br/><br/>";

var_export($value);

echo "<br/><br/>";

echo "&pi;";

echo "<br/><br/>";

echo "&copy;";

$nbre = 2.55;

echo "<br/><br/>";

echo var_dump($nbre);

echo "<br/><br/>";

$nbre1 = &$nbre;

echo "On a créer un Alias \$nbre1 : ".$nbre1;

echo "<br/><br/>";

echo "On a créer un Alias $nbre1 : ".$nbre1;

echo "<br/><br/>";

echo 'On a créer un Alias $nbre1 : '.$nbre1;

echo "<br/><br/>";

echo 'On a créer un Alias '.$nbre1.' : '.$nbre1;

// unset ($nbre); supprime la variable $nbre

echo "<br/><br/>";

echo '<b>date</b> c\'est une fonction function date($jour,$mois,$annee)';

echo "<br/><br/>";

echo date("j m Y");

echo "<br/><br/>";

echo "Structure de contrôle";

echo "<br/><br/>";


echo " fonction de test pour une date valide";

echo "<br/><br/>";

checkdate(12,25,2000);

if (checkdate(12,31,2013)){
    echo "date ok";
}
else echo"Date non Ok";

echo "<br/><br/>";


echo "Structure de contrôle <b>SWITCH</b> : ";

echo "<br/><br/>";

$prenom = "Jean";
switch ($prenom)

{
    case "Jean";
    echo "masculin";
    break;

    case "jeanne";
    echo "feminin";
    break;

    default;
    echo "indeterminé";
}

echo "Structure de contrôle <b>le Ternaire</b> : ";

echo "<br/><br/>";

$a ="5";

echo $a=="1"? 'Vrai': 'Faux';

echo "<br/><br/>";


echo "Les boucles FOR";
echo "<br/><br/>";

$maphrase="Ma phrase";
for($i=1;$i<=10;$i++)
{
echo $i." ".$maphrase.", ";
}

echo "<br/><br/>";
echo "<b>Les boucles while</b><br/>";

$semaine =["Dimanche","Lundi","Mardi","Mercredi"];

$compteur=0;
while($compteur<count($semaine))
{
  echo $semaine[$compteur];
  $compteur++;
}


echo "<br/><br/>";
echo "<b>Les boucles foreach</b>";
echo "<br/><br/>";

$tableau = array ('an','B2',3,'toto','h');
foreach($tableau as $cle=>$val)
{
    echo "valeur $cle est $val<br/>";
}

echo "<br/><br/>";


echo "Version de PHP : ",PHP_VERSION, "<br>";
echo "Système d'exploitation du serveur : ",PHP_OS, "<br>";
echo "Langue du navigateur client :",$_SERVER["HTTP_ACCEPT_LANGUAGE"], "<br>";




$f= fopen ("sauvegarde.txt","a");
fwrite($f,$_POST['nom']." - ");
fwrite($f,$_POST['email']."\n");
fwrite($f,$_POST['tel']."\n");
fwrite($f,$_POST['codepostal']."\n");
fwrite($f,$_POST['depart']."\n");
fwrite($f,$_POST['date']."\n");
fwrite($f,$_POST['code']."\n");
fwrite($f,$_POST['sexe']."\n");
fwrite($f,$_POST['pays']."\n");

$f=fclose($f);

?>
</main>

