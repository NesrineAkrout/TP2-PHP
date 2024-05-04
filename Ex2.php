<HTML>
	<BODY>
	<h1> TP7Ex3 </h1>
	
	<?php
	
	
	
	$num = mt_rand(1, 7); 


echo "La conversion de $num est: ". conversion($num);
$jour='Mardi';
echo "<br> La conversion de $jour est: ". conversion($jour);

function conversion($numOuJour)
	{
		$tab = array(1=>'Lundi',2=>'Mardi',3=>'Mercredi',4=>'Jeudi',5=>'Vendredi',6=>'Samedi',7=>'Dimanche',
		'Lundi'=>1,'Mardi'=>2,'Mercredi'=>3,'Jeudi'=>4,'Vendredi'=>5,'Samedi'=>6,'Dimanche'=>7);
		
		
		return $tab[$numOuJour];
	}

		
	?>