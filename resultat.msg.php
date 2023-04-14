<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichier envoyé</title>
    <link rel="stylesheet" href="resultat.msg.css">
</head>
<body>
    <p>Merci <?php echo $_SESSION["utilisateurs"]; ?>, <br> Votre formulaire a bien été envoyé !</p>
    <a href="index.php"><button class="btn">ACCUEIL</button></a>
</body>
</html>