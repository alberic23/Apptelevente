<?php session_start() ?>
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.msg.css">
    
    </head>
    
    <body>
        
        <p>Bienvenue <?php echo $_SESSION["utilisateurs"]; ?>, tu es maintenant bien connecté</p>
        
        <form action="rapport.ext.php" method="post">

            <div class="rec">
                <label for="start">Date</label>
                <input type="date" id="start" name="trip-start" value="2023-02-24" min="2023-04-10" max="2023-12-31">
            </div>
            
            

            <div class="rep">
                <label>Nom complet</label>
                <input type="text" name="utilisateur" placeholder="Entrez votre nom complet" required autocomplete="off" >    
            </div>
               
            
             
            <select name="pets" id="pet-select" class="peth">
                <option value="">Filières</option>
                <option value="logiciel">Génie logiciel</option>
                <option value="finance">Finance Comptabilité</option>
                <option value="transport">Transport logistique</option>
                <option value="marketing">Marketing Management</option>
                <option value="ressources">Ressources humaines</option>
                <option value="reseau">Réseaux télécommunuications</option>
                <option value="audit">Audit et controle de gestion</option>
                <option value="droit">Droit des affaires et fiscalité</option>
            </select>

            <div class="res">
                <label>E-mail</label>
                <input type="email" name="email" placeholder="Entrez votre email" required autocomplete="off"> 
            </div>
            
            
            <div class="ret">
                <label>Téléphone</label>
                <input type="text" name="tel" placeholder="Entrez votre contact téléphonique" required autocomplete="off">
            </div>
             

            <div class="rem">
                <label>Nombre d'Appels Professionnels</label>
                <input type="text" name="prof" placeholder="" required autocomplete="off">
            </div>
            
            <div class="rel">
                <label>Nombre d'Appels élèves</label>
                <input type="text" name="eleve" placeholder="" required autocomplete="off">
            </div>
            
                            
                        
            <button type="submit" name="signup-submited" class="btn">ENVOYEZ</button>
                    
        </form>
        <div class="home-redirection"><a href="index.php">ACCUEIL</a></div>
             
    
    
    </body>


</html>



