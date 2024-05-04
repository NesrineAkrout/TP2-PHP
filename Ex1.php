<HTML>
	<HEAD>
		<TITLE>TP2EXRCICE2</TITLE>
	</HEAD>
	<BODY>
	<?php
	function style($chaine,$code){
		switch ($code){
			case 1: $res = "<span style='Font-weight:bold'>".$chaine."</span>"; break;
			case 2:  $res = "<span style='Font-style:italic'>".$chaine."</span>"; break;
			case 3: $res = "<div style='text-align:center'>".$chaine."</div>"; break;
			case 4: $res = "<H1>$chaine</H1>"; break;
			case 5: $res = "<span style='text-decoration: underline'>".$chaine."</span>"; break;
			default : $res = $chaine;
		}
		return $res;
	}
	echo style("Tounsi",1) . ' ';	
	echo style("Ahmed",2);	
	echo style("01/01/1990",3);	
	echo style("12345678",4);	
	echo style("Gabes",5);	
	
	?>
	</BODY>
</HTML>