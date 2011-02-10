<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Bienveue sur E-Life</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
       <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css" />
   </head>
 
   <body>
 
       <!-- L'en-tête -->
 
       <div id="en_tete">
           
       </div>
 
       <!-- Les menus -->
 
       <div id="menu">        
           <div class="element_menu">
               <h3>Actualités</h3>
               <ul>
                   <li><a href="page1.html">Hier</a></li>
                   <li><a href="page2.html">Aujourd'hui</a></li>
                   <li><a href="page3.html">Demain</a></li>
               </ul>
           </div>
       
           <div class="element_menu">
               <h3>Profil</h3>
               <ul>
                   <li><a href="page4.html">Moi</a></li>
                   <li><a href="page5.html">Elle</a></li>
                   <li><a href="page6.html">Eux</a></li>
               </ul>
           </div>        
       </div>
 
       <!-- Le corps -->
 
       <div id="corps">
           <h1>E-LIfe</h1>
       
           <p>
               Bienvenue sur mon super site !<br />
               Ceci est un test de la page d'actualité de notre site
           </p>
       
           <h2>A qui s'adresse cette page ?</h2>    
           <p>
               A tout le monde ! Mais plus particulierement à l'utilitaire du compte<br />
              Qu'il soit de mayotte réunion , de renes ou d'haiti cette page doit s'afficher
           </p>
           
           <h2>L'accésibilité et contenu</h2>    
           <p>
             L'utilisateur aura droit a des actualités et info-multimédia sur tout ce qui concerne ces contacts,<br />
             il aura la possibilité d'accés rapide grace à un algorithme " fait par valentin" permettant de rechercher le nombre de clic ou de page " favorites" que le tutilaire du compte nous aura informer
             bien sur ceci ne sera pas évidement , c'est pur cela que valentin est là , l'utilisateur aura aussi droit à un playlist qui sera en libre positionnement sur chacune des pages dont-il s'y trouvera ect...
           </p>
<p>Quel est votre impréssion</p>

<form method="post" action="traitement.php">
<!-- <p>Nom: </p>
<p> <input type="text" name="pseudo" /></p> -->
<p>
      <!-- <label for="pseudo">Nom</label> : <input type="text" name="pseudo" id="pseudo" value="Nom" />  ceci sert a insert un text dans une case avec un label qand on clic sur le mot lié la case pseudo est désigné --> 

<fieldset>
       <legend>Vos coordonnées</legend> <!--groupement d'information-->	 

	<label for="pays">Nom :</label><br /><!--selection déroulante-->
       <select name="nom" id="nom" tabindex="20">
	 <optgroup label="Administrateur"><!--balise de sous groupe-->

           <option value="Attie">Attie</option>
           <option value="Hamon">Hamon</option>
           <option value="Toulcanon">Toulcanon</option>
	</optgroup>
       </select>

    	<label for="pass">Votre mot de passe :</label>
       <input type="password" name="pass" id="pass" tabindex="20" />				

</fieldset>
<p> <?php echo "Les seuls Nom autorisé sont <strong>Toulcanon, Attie ou Hamon</strong> Merci";?> </p>

 <label for="Commentaire">Commentaire</label>:<br />
 <textarea name="commentaire" id="commenataire" rows="10" cols="50" tabindex="30"></textarea>
</p>
 
 <p>
       <input type="submit" /> <input type="reset" />
 
 </p>


</form>




       </div>
 
       <!-- Le pied de page -->
 
       <div id="pied_de_page">
           <p>Copyright "E-life Entertainement Toulcanon_Hamon_Attie" 2010, tous droits réservés</p>
       </div>
 
   </body>
</html>

       
   </body>
</html>
