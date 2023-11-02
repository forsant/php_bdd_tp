<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style-grid.css"> -->
    
    <title>Variables_PHP</title>
</head>
<body>
<header>
    <nav>
        <a href="#">Presentation</a>
        <a href="#">Contact</a>
        <a href="#">Accueil</a>
    </nav>
</header>
<main>
    <div class="content">
        <h1>Opération sur variables</h1>
    <?php
    $hab = 15230;
    echo $hab;

    $hab = 102;//on ecrase la valeure
    echo $hab;
    echo "<br>";
    $ville ="Orléans";
    $departement=" "."Loiret";
    $titre= $ville.$departement;
    echo $titre;

    echo "<br>";
    $nn = "Salut"." ";
    $mm = "Bob";
    $pp = "Copain";

    $affich = $nn.$mm.", tu veux être mon " .$pp. " ?";
    echo $affich;

    $a=1;
    $b=3;
    $a =$a +2;
  
    echo "<br>";
    $a=1;
    $b=3;
    $a=$a+2;
    echo "premier : ".$a;

    echo"<br>";

    $a = $a*$b;
    echo "deuxieme : ".$a;
    echo"<br>";
    $a = $a -1;

    echo " troisieme : " .$a;
    echo "<br>";

    $a=$a / 4;
    echo "quatrième :" , $a;

    echo "<br>";
    print("cinquième" . $a);
 


    ?>
        </div>
</main>

<footer>
    <div>Text</div>
    <div>&copy;DWWM 2023</div>
    </footer>
<script src="script.js"></script>
    <!-- Les Tests PHP -->
    
    
</body>
</html>