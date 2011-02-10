<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Espace Etudiants</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design2.css" />
   </head>
  <body>
   <?php
  if (isset($_POST['prenom']) AND($_POST['prenom'] == "Toulcanon" OR$_POST['prenom'] == "Marcoz" OR$_POST['prenom'] == "Baillif")  AND ($_POST['pass']) AND $_POST['pass'] == "1234" OR $_POST['pass'] == "florent" OR $_POST['pass'] == "Cindy" )
   {
   ?>
   <?php include("date_profil.php"); ?>
    <?php include("entete_profil.php"); ?>
 <!--Form concernant les input et le parcours de fichiers -->
 <form action="Formulaire.php" method="post" enctype="multipart/form-data" id="uplo">
        <p>
                Veuillez Uploader votre Fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>

    <?php /*include("menu_profil.php");*/ ?>

	<?php include("pieddepage_profil.php"); ?>
	
	  <?php
	}
	else // Sinon, on affiche un message d'erreur
	{
	?>	
		<?php include("error_connexion.php");
	}
	 ?>
	</body>
</html>
	
