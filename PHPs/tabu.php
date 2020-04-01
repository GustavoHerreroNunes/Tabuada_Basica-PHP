<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Resultado</title>
		<link rel="stylesheet" type="text/css" href="../css/Op1.css"/>
	</head>
	<body>
	<center>
	<div id="phpV">	
			<?php
				$val = $_POST['num'];
			
				echo "<p id='Tit'><b>Tabuada</b></p>";
				
				for($i = 0; $i <=10; $i++){
					echo "<p>".$val." x ".$i." = <Vals>".($i*$val)."</Vals></p>";
				}
			?>

	</div>
	<center>
	</body>
</html>