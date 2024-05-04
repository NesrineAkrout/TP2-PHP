
	
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
	?>