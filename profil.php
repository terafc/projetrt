<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Bienvenue sur E-Life !</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css" />
   </head>
 
   <body>
   <?php
  if (isset($_POST['prenom']) AND($_POST['prenom'] == "Toulcanon" OR$_POST['prenom'] == "Marcoz" OR$_POST['prenom'] == "Baillif")  AND ($_POST['pass']) AND $_POST['pass'] == "1234" OR $_POST['pass'] == "florent" OR $_POST['pass'] == "Cindy" )
   {
   ?>
  
  
   <?php include("date_profil.php"); ?>
    <?php include("entete_profil.php"); ?>
 
    <?php /*include("menu_profil.php"); */?>
	<?php include("corp.php");?>
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
	
