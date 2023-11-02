
<?php
echo '<img src="images/connexion-base.png"><br/>';
//Interroget une base de données à l'aide d l'API MysSQLi
        /**
         * On interroge les informations d'une table (bdd)
         * par l'intermédiaire d'une requete SQL
         * ce qui renvoie un jeu de résultats qu'on affiche
         * par la suite dans le navigateur (ou client).
         */

$cnx= mysqli_connect("localhost","root","","casse2");

if(mysqli_connect_errno())
{
    echo "erreur de connexion à la base " . mysqli_connect_error();
}
 // je définie la requête

echo '<img src="images/lire-la-bdd-1.png">';

 $sql = "select * from personne order by numach asc";
 if($result=mysqli_query($cnx, $sql))
 {
    echo "pour cette requête <br/> ".$sql. "<br/><br/>";
    echo "il y a  ".mysqli_num_rows($result)." réponses<br />";
    echo "<br/><br/>";
    echo "<html><style>";
    echo "table, th, td
    {
        border:1px solid;
    }";

    echo"</style>";
    echo "<body><table>";
    echo "<th>"."NumAch"."</th>";
    echo "<th>"."Nom"."</th>";
    echo "<th>"."Age"."</th>";
    echo "<th>"."Ville"."</th>";
    echo "<th>"."Sexe"."</th>";

    // pour l'ensemble des lignes du jeu résultats, pépète

    while($row = mysqli_fetch_row($result))
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "</tr>";

        echo $row[0]." | ";
        echo $row[1]." | ";
        echo $row[2]." | ";
        echo $row[3]." | ";
        echo $row[4]." | "."<br/>";
    }
 echo "</table></body></html>";


 //annule le jeu de résultats vide la mémoire


 mysqli_free_result($result);

    
 }

 echo '<img src="images/ferme-la-connexion.png"><br/>';
 //Ferme la connexion à la base de données
 mysqli_close($cnx);

 /**
  *  l'expression mysqli_num_row($result) renvoie le nombre de ligne dans le jeu de résultats
  *  qui est issu de la requête.

  * l'expression  $result = mysql_query($cnx, $sql) se connecte à la base de donnée par l'intermédiaire
   *  de la variable déja validé $cnx et utilise la requête spécifique dans la variable $sql pour extraire 
   * un jeu de résultats qui est placé dans la variable $result.
   * 
   * l'expression mysql $fetch_row(to fetch qui signifie entre autres aller chercher quelqu'un) récupère
   *  une ligne d'information dans le jeu de résultats et la renvoie en tant que tableau associatif ou chaque
   * colonne représente les champs.
   * Chaque nouvel 
 */

?>
