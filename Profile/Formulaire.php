<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Envoi du fichier</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design2.css" />
   </head>
 
   <body>

  
  
    <?php include("entete_profil.php"); ?>
 	<?php
// Testons si le fichier a bien �t� envoy� et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autoris�e
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker d�finitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien �t� effectu� !";
                }
				else 
				{
		echo "L'envoi n'as pas �t� �ffectu� Veuillez v�rifier si le format correspond bien aux extension suivante ( .doc .pdf .calc .odt )";
				}
        }
}

?>
    <?php /*include("menu_profil.php");*/ ?>

	<?php include("pieddepage_profil.php"); ?>
	
	
	</body>
</html>
	
