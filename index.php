<?php session_start()  ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="home.css">
        <title>App web</title>
    </head>
    
    
    <body>
        <header>
            <div class="logo">IPAM</div><br><br>
            <div class="inscription">
                <?php
                
                if(isset($_SESSION["userId"])){
                    echo '<form action="logout.ext.php" method="post">
                    
                          <button type="submit" name="logout-submit" class="btn">SE DECONNECTER</button>
                          </form>';
                            
                    
                }else{
                    echo '<a href="signup.php"><li style="margin-top:-30px; float:right;">S\'INSCRIRE</li></a>
                        <a href="login.php"><li style="margin-top:-30px; float:right;">SE CONNECTER</li></a>';
                
                }
                
                ?>
               
            </div>
        </header>
        
        <div class="textgame">
            Bienvenue sur l'application web IPAM ! <br>
            Enregsitrez vos travaux d'émissions d'appels <br> Pour y accéder,<br>
            Inscrivez-vous !
        
        </div>
        
        

    </body>


</html>