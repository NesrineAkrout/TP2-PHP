<HTML>
	<HEAD>
		<TITLE>TP7-EXRCICE5</TITLE>
	</HEAD>
	<BODY>
		 <?php
		 
		 $liste_gouvernorats=array(71=>'Tunis',72=>'Bizert',73=>'Sousse',74=>'Sfax',75=>'Gabes');							
									
			echo "Gouvernourat: ";
			echo "<SELECT name='gouvernorat'>";
			foreach($liste_gouvernorats as $elem){
			echo "<OPTION>$elem</OPTION>";
			}
			echo "</SELECT>";
		 
		 function gouvernorat_telephone($tel)
		 {
		 		global $liste_gouvernorats;
		 	
		 		$prefixe=substr($tel,0,2); 
		 		
		 		
		 		return $liste_gouvernorats[$prefixe];
		 	
		 	
		 	}
		 	
		 
			
			
			echo "<P>";
			
			$tel="742328";
			
			
			if(telephoneFixe_valide($tel))
			echo "Le gouvernorat correspondant au numero $tel est:  ". gouvernorat_telephone($tel);
			else echo "le numero $tel est invalide";

			function telephoneFixe_valide($tel)
		  {
		  		$valide=true;
		  	/* vérifie si un num tel est valide: contient 8 chiffres*/
		  	
		  	$long_ch=strlen($tel);
		 	if($long_ch!=8) $valide= false;
		 	else {
		 		
		 		if($tel[0]!=7) $valide= false;
                 //Rque: On peut ajouter aussi un contrôle sur $tel[1] 
			}
				 return $valide;
		  	
		  	}
		?>
	</BODY>
</HTML>