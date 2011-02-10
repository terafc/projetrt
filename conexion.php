<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Sujet N°4 </title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Design" href="css_connexion.css" />
   </head>
 
   <body>
   <br/><br/><br/><br/><br/><br/>
   <?php include("entete.php"); ?>
   <div id="connexion">    
           <div class="connexion">
		   <form action="Profile/profil.php" method="post"> <!--formulaire du profil -->
		   <p>
		   <label for="prenom">Nom</br>:</label> <!-- Ici l'utilisateur entre son nom d'utilisateur -->
		   <input type="text" name="prenom" value="Admin" />
		   <label for="pass"> Mot de passe </br> :</label><!--Ici l'utilsateur entre son mot de passe -->
		   <input type="password" name="pass" id="pass" tabindex="20" />
		   <input type="submit" value="Connexion" /><!--formulaire du bouton valider-->
		   </p>
	</div>
   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <?php include("pieddepage_connexion.php"); ?><!-- Le pied de page est apellé dans une autre page  -->
   
   
   
   
   </body>
</html>