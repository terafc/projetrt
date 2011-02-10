<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Bienvenue sur E-Life !</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Design" href="css_connexion_error.css" />
   </head>
 
   <body>
   <br/><br/><br/><br/><br/><br/>
   <?php include("entete_profil.php"); ?>
   <div id="connexion">    
           <div class="connexion">
		   <form action="profil.php" method="post">
		   <p>
		   <label for="prenom">Nom</br>:</label>
		   <input type="text" name="prenom" value="Admin" />
		   <label for="pass"> Mot de passe </br> :</label>
		   <input type="password" name="pass" id="pass" tabindex="20" />
		   <input type="submit" value="Connexion" /><!--formulaire du bouton valider-->
		   </p>
	</div>
	
	<div id="error"> 
	<p> <font color=red> Votre Nom ou votre mot de passe de connexion sont incorrects veuillez réessayer</font><br/> "Nous vous rapellons que notre site est en construction! seuls les Administrateur: Toulcanon, Baillif , Marcoz sont autorisée à se connecter au serveur. N'oubliez pas les majuscules"</p>
	</div>
	
   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <?php include("pieddepage_profil.php"); ?>
   
   
   
   </body>
</html>

