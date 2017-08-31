<?php 

function contar_usuarios(){
	$archivo = 'contador.txt';

	if (file_exists($archivo)) {
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta);

		return $cuenta;
	} else {
		file_put_contents($archivo, 1);
		return 1;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de Visitas</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<h1>Contador de Visitas</h1>
	<div class="visitantes">
		<p class="numero"><?php echo contar_usuarios(); ?></p>
		<p class="texto">Visitas</p>
	</div>
</body>
</html>



<html>

<style type="text/css">
* {
	padding: 0;
	margin: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	background: #E8EEF2;
	font-family: "Oswald";
}

.visitantes {
	background: #BB1F35;
	width: 200px;
	border-radius: 5px;
	padding: 30px;
	margin: 30px auto; 
	text-align: center;
}

h1 {
	font-weight: normal;
	text-align: center;
	margin: 30px 0;
	color:#0D2C44;
}

.visitantes .numero {
	font-weight: normal;
	font-size: 60px;
	color:#fff;
}

.visitantes .texto {
	color: #fff;
	font-weight: normal;
	font-size: 30px;
}
</style>


</html>

