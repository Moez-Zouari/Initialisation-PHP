<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="traitement.php?nom=Moez&prenom=Zouari">Afficher mon nom et prenom</a>
    <form action="traitement.php" method="post">

        <label for="nom">Votre Nom</label>
        <input type="text" name="nom" id="nom" required>
        <label for="nom">Votre Prénom</label>
        <input type="text" name="prenom" id="prenom" required>
        <button type="submit" name="valider">Valider</button>
    </form>
</body>

</html>