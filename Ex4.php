<HTML>
	<HEAD>
		<TITLE>EXRCICE4</TITLE>
	</HEAD>
	<BODY>
		<?php
			function Lien($chaine,$URL, $color='blue'){
			return "<a href=$URL style='color:".$color."';>"." $chaine  </a>";
			}
			
			
			echo Lien ("Lien vers google", "http://www.google.com", "red");
			echo "<BR/>";
			echo Lien ("Lien vers yahoo", "http://www.yahoo.fr", "green");
			echo "<BR/>";
			echo Lien ("Lien vers facebook", "http://www.facebook.com");
			
			?>
			
			</BODY>
</HTML>