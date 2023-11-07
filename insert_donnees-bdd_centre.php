<?php
/* *
Inserer les données dans Mysqli

Pour inserer de nouveaux enregistrements ds une table, la commande en sql easter_date
Inser into
Les chaines sont placées entre apostrophe, sauf valeures numérique ou Null,
il n'y a pas de donnee à insérer


*/
$con = mysqli_connect("localhost","root","","casse2");
if(mysqli_connect_errno()){
    echo "erreur de connexion" . mysqli_connect_error();
    exit();
}
//on crée la requete sql
$sql ="insert into personne (NumAch, Nom, Age, Ville, Sexe) value('','Alain',32,'Monchester','M')";

//on stock l'execution de la requête dans une variable
//et on execute la fonction Mysqli_query pour exécuter la requête
// or die pour afficher le message d'erreur et le script s'arréte
$result = Mysqli_query($con, $sql) or die  ("echec de la requete insert");

echo " insert réalisée avec sucesse !";

// ferme la connexion à la base
mysqli_close($con);
?>
