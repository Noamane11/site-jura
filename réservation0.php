<?php


<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="PAGE.css" media="screen" type="text/css" />
    </head>
    <body>








<?php // on se connecte à notre base $base = Réservation ('nom', 'prénom', 'date'); mysql_select_db ('ma_base', $base) ; ?>



















































<nav>
        <ul id="menu_navigation">


        	<li><a href="accueil.html">Accueil</a></li>

        	<li><a href="inscription.php">Inscription</a></li>

             <li><a href="page1.html">Connexion</a></li>

                <li><a href="réservation0.html">Réservation</a></li>

                <li><a href="mrsvt.html">Mes Réservation</a></li>

               <li><a href="info.html">Mettre a jours mes informations </a></li> 
                
            
        
        </ul>
    </nav>







        <div id="container">
            

            <form action="verification.php" method="POST">
                <h1>Réservation</h1>




Civillité :
	<select>

	<option value="paris">homme</option>
	<option value="paris">femme</option><br>
	
	</select>

	<br>
	
	<br>nom :
	<input type="text" name="nom" size="20"><br>


	<br>prénom :
	<input type="text" name="nom" size="20"><br>

	<br>numéro de téléphone :
	<input type="text" name="nom" size="20"><br>
	
	
	date__Début :
	<input type="date" name="bday"/><br>

	<br>

	date__Fin  :
	<input type="date" name="bday"/><br>
	

	<br>                  
	
	Nombre de personnes:
	<select>

	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10+">10+</option>
	
	</select>


	   <input type="submit" id='submit' value='Valider' >
	

                



            </form>
        </div>
    </body>
</html>
