<?php
echo "<font size='5'>Fonction avec la <b>boucle foreach</b> avec tableau surglobal \$_POST pour lire les variables</font><br/><br/>";
echo '<img src="images/formulaire_variables_1.png"/><br/><br/>';

foreach($_POST as $name=>$value){
    echo $name." ".$value."<br>";
}

?>




