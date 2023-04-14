<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="signup.css">
            <title>Inscription</title>
		</head>

		<body>
            
            
            <div class="FORM">
                
                <div class="FORM-text">
                    <header><a href="index.php"><span class="ipam">IPAM</span></a></header>
                    <h1></h1><br>
                    
                    
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "invalidNomUtilisateur&invalidemail"){
                                echo '<p class="msg-error">Nom d\'utilisateur et email invalides</p>';
                            }else if($_GET['error'] == "invalidemail"){
                                    echo '<p class="msg-error">email invalide</p>';
                                }else if($_GET['error'] == "invalidNomUtilisateur"){
                                        echo '<p class="msg-error">Utilisateur invalide</p>';
                                    }else if($_GET['error'] == "MotDePasseIncorrect"){
                                        echo '<p class="msg-error">Les mots de passe ne correspondent pas</p>';
                                }else if($_GET['error'] == "NomUtilisateurPris"){
                                        echo '<p class="msg-error">Utilisateur déjà pris!</p>';
                                    }
                            
                        }
                    
                    
                    ?>
			
                    <form action="signup.ext.php" method="post">

                        <label>Nom d'utilisateur</label> <br>
                        <input type="text" name="utilisateur" placeholder="Tapez un nom d'utilisateur" required autocomplete="off" >
                    
                        <br>

                        
                        <label>E-mail</label> <br>
                        <input type="email" name="email" placeholder="Entrez votre email" required autocomplete="off"> <br>

                        <label>Mot de passe</label> <br>
                        <input type="password" name="motpass" placeholder="Votre mot de passe" required autocomplete="off"> <br>

                        <label>confirmez votre mot de passe </label> <br>
                        <input type="password" name="motpass2" placeholder="Retaper votre mot de passe" required autocomplete="off"> <br>
                            
                        
                        
                        <input type="checkbox" name="accepter" value="OK" checked required autocomplete="off"><span id="accept">J\'accepte les
                        conditions d'utilisation</span> 
                        

                        <button type="submit" name="signup-submit" class="btn">S'inscrire</button>
                    

                    </form>
                    <p>Avez vous déjà un compte?<a href="login.php"> Se connecter</a></p>

                </div>
     
            </div>
			
		</body>

	</html>
