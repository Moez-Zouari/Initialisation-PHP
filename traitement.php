<?php
if (isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
} else {
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
}

// $nom = $_POST["nom"];
// $prenom = $_POST["prenom"];
echo "Votre Nom : " . $nom . "<br>";
echo "Votre Prénom : " . $prenom . "<br>";
