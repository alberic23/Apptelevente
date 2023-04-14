<?php


if(isset($_POST["signup-submit"])){
   
    require 'dbh.ext.php';
    
    $utilisateur = $_POST["utilisateur"];
    $email = $_POST["email"];
    $password = $_POST["motpass"];
    $password2 = $_POST["motpass2"];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$utilisateur)){
        header("Location: signup.php?error=invalidNomUtilisateur&invalidemail");
        exit();
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?error=invalidemail");
        exit();
    }else if(!preg_match("/^[a-zA-Z0-9]*$/",$utilisateur)){
         header("Location: signup.php?error=invalidNomUtilisateur");
        exit();
    }else if($password !== $password2){
        header("Location: signup.php?error=MotDePasseIncorrect");
        exit();
    }else{
        // verification du nom d'utilisateur pour voir si elle est déjà utilisée dans la base de donnée
        $sql = "SELECT nomutilisateur FROM acces WHERE nomutilisateur ='".$utilisateur."';";
        $res = mysqli_query($conn,$sql);
        if(!$res){
            header("Location: signup.php?error=sqlerreur");
            exit();
        }else{
            $resultCheck = mysqli_num_rows($res);
            
            if($resultCheck > 0){
                header("Location: signup.php?error=NomUtilisateurPris");
                exit();
            }else{
                // hasher le mot de passe
                $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO acces (nomutilisateur,email,motdepass) VALUES ('".$utilisateur."','".$email."','".$hashedPwd."');";
                $res = mysqli_query($conn,$sql);
                
                if(!$res){
                    header("Location: signup.php?error=sqlerror");
                    exit();
                }else{
                    header("Location: signup.msg.php?signup=SUCCESS");
                    exit();
                }
                
            }
        }
            
    }
    
    mysqli_close($conn);
     
    
}

else{
    header("Location: signup.php");
    exit();
}


?>