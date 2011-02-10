           
		   

      
   <div id="date">
		   <?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = 1+date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour '.$_POST['prenom'] .'!  Vous vous etes connecté le '.$jour . '/' . $mois . '/' . $annee . ' ' . $heure. ' h ' . $minute;
?>

 </div>