<HTML>
	<BODY>
	<h1> Utilisation des variables de type tableau en PHP </h1>
	<h2>Question c</h2>
	<?php
	/* Difference entre require et include:
	--) On utilise require quand le fichier est primordial pour l'application et 
	celle-ci doit s'arrêter quand le fichier n'est pas trouvé
	
	--) On utilise include quand le fichier n'est pas primordial pour l'application et 
	celle-ci peut continuer même si le fichier n'est pas trouvé
	*/

	require 'FonctionSomme.php';
	//include 'FonctionSomme.php';
	//echo "<br> L'application peut continuer";
	
	$tab = array(3, 2, 10,15); 


echo "La somme des nombres du tableau est:". somme($tab);
echo "<br> L'application peut continuer";


/*Redéfinition non acceptée*/
function somme($tab)
	{
		
		return "je suis plus prioritaire";
	}

		
	?>