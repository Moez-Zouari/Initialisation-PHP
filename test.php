<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // debut afficher chaine
    echo "<h1>Bonjour</h1>";

    //Fin afficher chaine

    //definir une constante avec php 
    define("TVA", 19);
    echo "TVA : " . TVA . "<br>";

    // declaration et affichage une variable
    $a = 10;
    echo "Valeur A : " . $a . "<br>";

    // declaration d'une variable global
    $GLOBALS['b'] = 5;
    echo "Valeur B : " . $b . "<br>";

    function multip($nbr)
    {

        $resultat = $GLOBALS['b'] * $nbr;
        return $resultat;
    }

    function calculttc($montantht)
    {
        $resultat = $montantht * (1 + TVA / 100); //1.19
        return $resultat;
    }
    echo "Multiplication de " . $GLOBALS['b'] . " * 3 : " . multip(3) . "<br>";
    echo "Calcul TTC : " . calculttc(1000) . "<br>";
    echo "Server : " . $_SERVER['HTTP_HOST'] . "<br>";
    phpinfo();
    ?>
</body>

</html>