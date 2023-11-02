<main>
<h1>-------- Variable conversion site ---------</h1>
<br/>
<?php
echo "<h4>Modifier le type de varaible directement <b>()</b></h4><br />";

echo "On affecte la variable <b>\$var</b> avec 3.5 kilomètres<br/>";
echo '<img src="images/variable_conversion_1.png" /><br><br/>';
$var = "3.55 kilomètres";

echo "On affiche la variable <b>\$var</b><br/>";
echo '<img src="images/variable_conversion_2.png" /><br/>';
echo $var."<br/><br/>";

echo "On modifie le type de la variable <b>\$var2</b> en double<br/>";
echo '<img src="images/variable_conversion_3.png" /><br/>';
$var2= (double) $var;
echo "\$var2 = ".$var2."<br/><br/>";//affiche 3.55

echo "On modifie le type de la variable <b>\$var3</b> en entier<br/>";
echo '<img src="images/variable_conversion_4.png" /><br/>';
$var3 = (integer) $var2;
echo "\$var3 = ",$var3,"<br/><br/>";//affiche 3

echo "On modifie le type de la variable <b>\$var4</b> en boolean<br/>";
echo '<img src="images/variable_conversion_5.png" /><br/>';
$var4 = (boolean) $var3;
echo "\$var4 = ",$var4,"<br/>";//affiche 1
echo "<br />";
/**
* Vous avez la possibilité de mofifier le type de la variable elle-même
* au moyen de la fonction settype()
*/
echo "<h4>Modifier le type de varaible avec <b>settype</b></h4><br />";
echo "<b>Utilisation de settype()</b>";
echo "<br><br>";
echo '<img src="images/variable_conversion_6.png" /><br/>';
echo '<img src="images/variable_conversion_7.png" /><br/>';
echo var_dump($var)."<br/>";
echo '<img src="images/variable_conversion_8.png" /><br/>';
settype($var, "float");
echo $var."<br/>";
echo var_dump($var)."<br/>";
echo "<br/>";

echo '<img src="images/variable_conversion_9.png" /><br/>';
$vall ="35 ans";
settype($vall,"double");
echo "\$vall=".$vall."<br>";
echo var_dump($vall)."<br/>";
echo "<br>";

echo '<img src="images/variable_conversion_10.png" /><br/>';
$vall ="35 ans";
settype($vall,"integer");
echo "\$vall=".$vall,"<br>";
echo var_dump($vall)."<br/>";
echo "<br>";

echo '<img src="images/variable_conversion_11.png" /><br/>';
$vall ="35 ans";
settype($vall,"boolean");
echo "\$vall=".$vall,"<br>";
echo var_dump($vall)."<br/>";
echo "<br>";

//Controler l etat d'une variable
/**
 * lors de l'envoie de donnée d'un formulaire vers le serveur le scripte qui reçoit les informations doit pouvoir
 * détecter l'existance d'une réponse dans les champs du formulaire. Les  fonctions isset() et empty() permettent 
 * ce type de contrôle;
 * 
 * La fonction isset() retourne une valeur false ou 0 si la valeur existe mais n'est pas initialisée ou si elle à la
 * valeur NULL, et retourne TRUE ou 1 si elle à une valeur quelconque.Il peut y avoir plusieurs paramètres dans cette
 * fonction mais ils doivent tous répondre à cette même condition pour que la fonction retourne la valeur TRUE.
 * 
 * La fonction empty() retourne la TRUE  si l'expression passée en mmémoire n'est pas initialisée, à une des valeurs
 * suivantes: NULL, FALSE, la chaine "0", ou est un tableau vide, et la valeur FALSE si elle a une quelconque autre
 * valeur.
 */


echo "<b>Les fonctions isset, empty()</b>";
echo "<br /><br />";
echo '<img src="images/variable_conversion_12.png" /><br/>';
 $a=null;
 if(isset($a)){
    echo "<b>\$a existe déja </b><br/><br />";
 }else{
    echo "<b>\$a n'existe pas </b><br /><br />";
 }

 echo '<img src="images/variable_conversion_13.png" /><br/>';
 if (empty($a)){
    echo "<b>\$a est vide </b><br /><br />";
 }else{
    echo "<b>\$a a la valeur $a</b><br /><br />";
 }

 echo '<img src="images/variable_conversion_14.png" /><br/>';
$b=0;
if(isset($b)){
    echo "<b>\$b existe déja </b><br/><br/>";
 }else{
    echo "<b>\$b n'existe pas </b><br /><br/>";
 }

 echo '<img src="images/variable_conversion_15.png" /><br/>';
 if (empty($a)){
    echo "<b>\$b est vide </b><br /><br/>";
 }else{
    echo "<b>\$b a la valeur $a</b><br /><br/>";
 }

 echo '<img src="images/variable_conversion_16.png" /><br/>';
 $c=5;
 if(isset($c)){
     echo "<b>\$c existe déja </b><br/><br/>";
  }else{
     echo "<b>\$c n'existe pas </b><br /><br/>";
  }
 
  echo '<img src="images/variable_conversion_17.png" /><br/>';
  if (empty($c)){
     echo "<b>\$c est vide </b><br />";
  }else{
     echo "<b>\$c a la valeur $c</b><br />";
  }

/**
 * Pour la variable de $a qui à la valeur NULL, isset() retourne également FALSE et emplty() TRUE.
 * Pour $b qui a la valeur 0, isset() permet de détecter l'existance de cette variable bien que empty() la déclare vide.
 * il en irait de même si $b était une chaine vide.
 * 
 * Pour une valeur numérique affectée à la variable $c, les deux fonction retourne TRUE. Ces fonctions, et en particulier
 * isset(), vous permettront de vérifier si un utilisateur à bien tous les champs d'un formulaire.
 * 
 */

?>
</main>
