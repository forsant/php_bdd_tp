<main>
<?php
class Personne{ // Attributs de la class
public $prenom;//="Alain";
public $nom;
public $age;

// Fonction Constructeur
public function __construct($prenom,$nom,$age)
{
$this -> prenom=$prenom;
$this -> nom=$nom;
$this -> age=$age;
}

public function nomcomplet()
{
   // return $this->nom.' '.$this->prenom.' '.$this->age . PHP_EOL;
    return sprintf('%s %s %d', $this->nom,$this->prenom,$this->age );
}

// Fonction creer par nous
public function danser()
{
    echo $this->prenom. " est entrain de danser" . PHP_EOL;
}
}


echo "<h3>------- Programmation Objet en PHP -------</h3>";
// création d'un objet à partir de la class personne ou création nlle instance de la class personne
$magne = new Personne('Magne','Jean',102);
$isaac = new Personne('Isaac','Jacques',89);
//echo "<b>".$magne->prenom . PHP_EOL."</b><br/>";
//echo "<b>".$magne->prenom . PHP_EOL."</b><br/>";

echo  $magne->prenom . PHP_EOL."<br/>";
echo  $magne->nom . PHP_EOL."<br/>";
echo  $magne->age . PHP_EOL."<br/>";

echo $magne->danser();

$toutlenom=$magne->nomcomplet();
echo $toutlenom . PHP_EOL;


// Avec define mavar fonctionne
define('mavar',"variable");
echo mavar;
?>

    

</main>