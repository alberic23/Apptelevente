<!DOCTYPE html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    
    
    
    <div class="FORM">
        
        <div class="form-text">
            
            <header><a href="index.php">IPAM</a></header>
            <h1></h1>
            
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "MauvaisMotDePasse"){
                        echo '<p class="msg-error">Mot de passe incorrecte</p>';
                    }else if($_GET['error'] == "dontexist"){
                        echo '<p class="msg-error"> Compte inexistant</p>';
                }
            
              }
            ?>
            
            
            <form action="login.ext.php" method="post">
                <label class="un">Nom d'Utilisateur ou E-mail</label> <br>
                <input type="text" placeholder="Entrer le nom d'utilisateur/Email" name="utilisateur" required> <br>
        
        
        
            <label class="un">Mot de passe</label> <br>
            <input type="password" placeholder="Entre ton mot de passe" name="motpass" required> <br>
        
        
            <button type="submit" name="login-submit" class="btn">SE CONNECTER</button>
        </form>
        
        <div class="bottom-text">
            <p>AVEZ VOUS UN COMPTE ? <a href="signup.php" id="signup">S'INSCRIRE</a></p>
        
        </div>
            <a href="reset-password.php" class="forgot-pwd">Avez vous oublié votre mot de passe ?</a>
        
        
        
        </div>
        
        
    </div>
   
    

</body>