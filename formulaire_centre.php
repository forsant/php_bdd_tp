<main>
<h1>LES FORMULAIRES</h1>

<!--
   Ils sont utilisés pour gestion intéractive d'un site et sont à la base des pages web dynamiques.
   *Mise en oeuvre *
   Un formulaire html est défini entre balise <form> et </form>

   method : mode de transmission vrs le serveur des informations saisies dans le formulaire.
   action : qui conteint le script qui va traiter le formulaire ou les données du formulaire.

   l'attribut méthod comprend deux types de valeurs : GET et POST
   GET: se rapporte aux données du formulaire qui seront transmises par URL
   et utlise la valeure superglobale $_GET.
   POST: se rapport aux données du formulaire qui seront transmises dans le corps de la requète
   et utlise la valeure superglobale $_POST.
   Syntaxe : $data = $_GET['dt']; // GET
   $data = $_POST['dt']; // POST
   
-->

<!-- ******************************************************Methode-get*********************************************************** -->
<?php
echo '<img src="images/formulaire.png"/><br>';
?>
<form action="" method="get">
    NOM: <input type="text" name="nom"><br><br>
    PRENOM: <input type="text" name="prenom"><br><br>
    AGE: <input type="text" name="age"><br><br>
    <input type="submit">
</form>

<!--
    La méthode GET envoie les données sous forme d'une suite de couples nom/valeur ajoutés à l'URL
    de la page applelée.
    La partie d'une URL précédée par ? est appelée chaine de caractère. Si le chaine de requête contient plusieurs éléments,
    alors chaque élément / valeur doit être séparé par le caractère &amp;
    Par ailleurs , elle ne doit pas dépasser 255 caractères.
    Les données transmises au serveur par la méthode GET sont visibles par les utilisateurs directement dans la barre d'adresse du navigateur.
-->
    <p> Bonjour !</p>
    <p>Votre nom est <?php echo "<b>".$_GET['nom']."</b>";?>, et votre prénom est <?php echo "<b>".$_GET['prenom']."</b>";?>
     Votre age est de <?php echo "<b>".$_GET['age']."</b> ans";?></p>
    <p>Faite un autre essai,
    <a href="#">Cliquez ici</a></p>


<!-- ******************************************************Methode-post*********************************************************** -->
<?php
echo '<img src="images/formulaire-2.png"/><br>';
?>

<form action="" method="post">
    NOM: <input type="text" name="nom"><br><br>
    PRENOM: <input type="text" name="prenom"><br><br>
    AGE: <input type="text" name="age"><br><br>
    <input type="submit">
</form>


<p> Bonjour !</p>
    <p>Votre nom est <?php echo "<b>".$_POST['nom']."</b>";?>, et votre prénom est <?php echo "<b>".$_POST['prenom']."</b>";?>
     Votre age est de <?php echo "<b>".$_POST['age']."</b> ans";?></p>
    <p>Faite un autre essai,
    <a href="#">Cliquez ici</a></p>

    <h2>Cours Formulaire-PHP</h2>
<!-- 
 
    Lorsque l'utilisateur valide le formulaire, l'attribut action appelle un prg PHP qui doit traiter les données.
    Les instructions qui permettent de récupérer les valeurs saisies dans le formulaire sont des variables surperglobales.
    c'est à dire des variables qui seront disponible quel que soit le context du script.C'est la surperglobale $_POST qui nous
    à permis de récupérer les données fournies par le formulaire via la méthode post.

    La liste suivante détaille toutes les variables surperglobales:

    - $_GLOBALS: C'est une association qui a pour but de référencer toutes les variables globales définies dans le contexte
                 d'éxécution global du scipt. Les noms des variables globales sont des index du tableau.

     - $_SERVER: Il s'agit d'un tableau associatif contenant des informations comme les entêtes les dossiers et le chemein du script.
                 c'est le serveur qui créer les entrées du tableau.Par exempne l'expression $_SERVER['PHP_SELF'] 
                 Renvoie le nom du fichier appelé avec le dossier à partir de la racine.

    - $_GET: indique un tableau associatif contenant des valeurs passées au script via le protocole HTTP et la méthode GET.

    - $_POST: c'est un tableau associatif qui contient les valeurs passées au script via le protocole HTTP et la méthode POST.

    - $_COOKIE: renvoie un tableau associatif qui contient des informations concernat le cookie.

    - $_SESSION: renvoie un tableau associatif qui contient des informations concernat la sesion en cours.

    - $_REQUEST: renvoie un tableau associatif qui contient des variables d'environnement qui sont définies par le systeme.

-->

<?php

echo '<img src="images/formulaire_variables_superglobales.png" /><br>';
echo '<img src="images/formulaire-3.png"/><br>';
echo $_SERVER['PHP_SELF'];
echo"<br><br>";

?>

<!-- Formulaire -->
<h2>Renseignez les champs</h2>
<br>
<?php
echo '<img src="images/formulaire-4.png"/><br>';
?>
<div>
<form action="formulaire_traitement.php" method="POST">
        <label> Nom:</label>
        <input type="text" placeholder="entrez votre nom ici" maxlenght="30" autofocus="" name="nom"/>
        <br><br>
        <label> Ville:</label>
        <input type="text" placeholder="entrez votre ville ici" maxlenght="30" name="ville"/>
        <br><br>
        <label> Code postal:</label>
        <input type="text" placeholder="tapez 4 chiffres" maxlength="5" pattern"[0-9]{5,5}"
             name="codepostal" required/><br><br>
        <input type="submit">
</form>
</div>
<br><br>

<!-- 
    pattern 0+[0-9]{6}
    la valeur doit commencer par 0 contenir [0-9] des chiffres de 0 à 9 et {5,5} minimum de digite = 5  {5} maximum 5
-->

<?php echo '<img src="images/formulaire-style.png"/><br>';?>
<div>
    <h4>Formulaire DWWM</h4>
    <form action="formulaire_traitement2.php" method="POST">
        <fieldset>
            <legend>Identité</legend>
            <label>NOM : </label><input type="text" name="nom" size="30" /><br><br>
            <label>Prénom : </label><input type="text" name="prenom" size="30" /><br><br>
            <label>Date de naissance : </label><input type="date" name="date_naissance" size="30" />
            <br><br>
            <label>Email : </label><input type="email" name="email" size="30" /><br><br>
    
    <legend>Localisation professionnelle</legend>
    <input type="radio" name="prof" value="France">France <br>
    <input type="radio" name="prof" value="France">Italie <br>
    <input type="radio" name="prof" value="France">Allemagne <br><br>
   
    <br>
    <input type="submit" class="bouton">
    </fieldset>
</form>
</div>




<style>
    fieldset{border:double medium blue; padding:20px;}
    input[type=text],input[type=date]{
        /** largeur de la zone de saisie*/
        width:200px;
        /* famille police*/
        font-family:sans-serif;
       /* taille du caractère*/
        font-size:14px;
    }
    label{
        width:150px;
    }
    input{
        border-top:none;
        border-left:none;
        border-right:none;
    }
    .bouton{
        width:150px;
        height:50px;
        color:blue;
        font-size:20px;
    }
    </style>


<?php
/*
Elles permettent de contrôler la bonne pratique saisie dans un formulaire d'une page web.
un code postal ne contient que des chiffres, un nom propre ne peut pas contenir des caractères inhabiltuel, une adresse email
doit obligatoirement posséder le signe @, une zone doit obligatoirement être en majuscule ...
A partir de HTML 5 la balise input propose des contrôles intégrés qui surveillent les cararctères, mais vous pouvez
aussi tester les données dans un script.
Ces expressions sont appelées rationnelles ou régulière (regular en anglais).

Le principe est de définir un modèle de saisie dans une chaine qui va servir à tester une autre chaine de caractère par rapport
a ce modèle. S'il n'y a pas de correspondance, on peut renvoyer un message à l'utilisateur en indiquant qu'il y a une erruer.
*/


//$modele = "/[A-Z]/"; // Modèle pour vérifier la présence de majuscules

//if (preg_match($modele, $_POST['nom'])==false)
//{
 //   //j'appelle la fonction et je passe le maessage à afficher
  //  echo "Le nom doit comporter des majuscules.";
 //   exit();
//}
// Le tableau ci-dessous montre quelques modèles employés dans le code PHP
/*
Modele                      ||  Description
"/[a-z]/"                       Au moins un caractère contenant n'importe quelle lettre en minuscule
"/[A-Z]/"                       Au moins un caractère contenant n'importe quelle lettre en majuscule
"/[0-9]/"                       Au moins un caractère contenant un chiffre en tre 0 et 9
"/[[:alpha:]]/"                 N'importe quel caractère minuscule ou majuscule
"/[[:alnum:]]/"                 N'importe quel caractère alphanumerique
"/[[:blank:]]/"                 Les espaces les tabulations
"/[[:ctrl:]]/"                  Les caractères de contrôle
"/[[:digit:]]/"                 Tous les chiffres
"/Lyon/"                        Teste si Lyon est présent
"//"  



*/

?>

<br/>
<form action="formulaire_traitement3.php" method="post">
    <fieldset>
        <legend><b>Vos coordonneées</b></legend>
        <label>Nom : </label>
        <input type="text" name="nom" size="40":>
        <br/>

        <label>Email : </label>
        <input type="text" name="email" pattern = "(^[a-z0-9]+ @([a-z0-9])+(\.)([a-z]{2,4})"/>
        <br/>

        <label>Tél : </label>
        <input type="tel" name="tel" pattern = "(^[0-9]{10})"/>
        <br/>

        <label>Code Postal: </label>
        <input type="text" name="codepostal" size maxlength/>
        <br/>

        <label>Département : </label>
        <input type="number" name="depart" min="1" max="139" size maxlength/>
        <br/>

        <label>Né(e) : </label>
        <input type="date" name="date" min="1960_01_01" max="2018_01_01" /><br/>
        <br/>

        <label>Code : </label>
        <input type="password" name="code" size maxlength/>
        <br/>
        <input type="radio" name="sexe" value="Femme"/>Femme<br/>
        <input type="radio" name="sexe" value="Homme" checked />Homme<br/>
        <br/>
        <select name="pays" size="1">
            <option value="France">France</option>
            <option value="Bergique">Belgique</option>
            <option value="Suisse">Suisse</option>
            <option value="Canada">Canada</option>

        </select>
        <br/><br/>
        <input type="submit" value="Envoyer" class="bouton">

    </fieldset>
</form>
</main>
