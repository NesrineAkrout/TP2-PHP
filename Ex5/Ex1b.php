<HTML>
	<BODY>
	<h1> Utilisation des variables de type tableau en PHP </h1>
	<h2>Question b</h2>
	<?php
	
	function somme($tab)
	{
		$i=0;$som=0;
		while($i < sizeof($tab)) 
		{    // count() retourne le nombre d’éléments dans tab
  			$som+= $tab[$i];
  				$i++;
		}
		return $som;
	}
	$tab = array(3, 2, 10,15); 


echo "La somme des nombres du tableau est:". somme($tab);

		
	?>

	</BODY>
</HTML>