<?PHP

if(isset($_POST["login-submit"])){
    
    require 'dbh.ext.php'; //Accéder à notre connexion BD;
    $utilisateur = $_POST["utilisateur"];
    $password = $_POST["motpass"];
    
    $sql = "SELECT * FROM acces WHERE nomutilisateur = '". $utilisateur."' OR email='". $utilisateur."';";
    
    $res= mysqli_query($conn,$sql);
    if(!$res){
        header("Location: login.php?error=sqlerror");
        exit();
    }else{
        if($row = mysqli_fetch_assoc($res)){
            $pwdCheck = password_verify($password,$row["motdepass"]);
            if($pwdCheck == false){
                header("Location: login.php?error=MauvaisMotDePasse");
                exit();
            }else if($pwdCheck == true){
                //on ouvre une session pour initialiser la connexion de l'utilistaeur
                session_start();
                $_SESSION["userId"]=$row["id"];
                $_SESSION["utilisateurs"]=$row["nomutilisateur"];
                header("Location: login.msg.php?login=SUCCESS");
                exit();
            }
        }else{
            header("Location: login.php?error=NexistePas");
            exit();
        }
    }
    
    
    
    mysqli_close($conn);
    
    
    
}else{
    header("Location: login.php");
    exit();
}
