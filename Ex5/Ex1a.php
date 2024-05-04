<HTML>
	<BODY>
	<h1> Utilisation des variables de type tableau en PHP </h1>
	<?php
	$tab = array(3, 2, 10,15,2,1,3,4,1,0); 

$i=0;$som=0;
while($i < count($tab)) {    // count() retourne le nombre d’éléments dans tab
  $som+= $tab[$i];
  $i++;
}
echo "La somme des nombres du tableau est: $som";


		
	?>
	
	</BODY>
</HTML>