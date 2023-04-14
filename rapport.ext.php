<?php

    session_start();
    if(!isset($_SESSION['utilisateurs'] )){
        header('Location: index.php');
    exit();
}

    if(isset($_POST["signup-submited"])){

    require 'dbh.ext.php';

    $date= $_POST["trip-start"];
    $nom = $_POST["utilisateur"];
    $filiere = $_POST["pets"];
    $email = $_POST["email"];
    $telephone = $_POST["tel"];
    $nbprofess = $_POST["prof"];
    $nbeleve = $_POST["eleve"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.msg.php?error=invalidemail");
        exit();
    }else{
        $sql = "INSERT INTO televente(date,nom,filiere,telephone,email,nbeleve,nbprofessionnel) VALUES ('".$date."','".$nom."','".$filiere."','".$telephone."','".$email."','".$nbeleve."','".$nbprofess."');";
                $res = mysqli_query($conn,$sql);
                
                if(!$res){
                    header("Location: login.msg.php?error=sqlerror");
                    exit();
                }else{
                    header("Location: resultat.msg.php?signup=succès");
                    exit();
                }
                
    }

}
    




?>