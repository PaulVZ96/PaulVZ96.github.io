<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="background-color: #A106FF; text-align: center;">
	<?php

	$calif = 0;

	$p1 = $_GET["p1"];
	$r1 = "yo";

	$p2 = $_GET["p2"];

	$p3 = $_GET["p3"];

	$p4 = $_GET["p4"];

	$p5 = $_GET["p5"];
	$r5 = "tete";

	$p6 = $_GET["p6"];
	$r6 = "Pinta";

	$p7 = $_GET["p7"];
	$r7 = "reaccion";

	$p8 = $_GET["p8"];

	$p9 = $_GET["p9"];

	$p10 = $_GET["p10"];	

	echo "La primera respuesta es:<br>" .$r1;
	echo "<br><br>";

	if ($p1 == $r1) {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}

	echo "La segunda respuesta es:<br>";
	echo "Ninguno de los anteriores";
	echo "<br><br>";

	if ($p2 == "a") {
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p2 == "b" ){
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p2 == "c") {
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p2 == "d") {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}

	echo "La tercera respuesta es:<br>";
	echo "89 años";
	echo "<br><br>";

	if ($p3 == "a") {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}if ($p3 == "b" ){
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p3 == "c") {
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p3 == "d") {
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}


	echo "La cuarta respuesta es:<br>";
	echo "3.1416.....";
	echo "<br><br>";

	if ($p4 == "a") {
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p4 == "b" ){
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p4 == "c") {
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}if ($p4 == "d") {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}

	echo "La quinta respuesta es:<br>" .$r5;
	echo "<br><br>";

	if ($p5 == $r5) {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}

	echo "La sexta respuesta es:<br>" .$r6;
	echo "<br><br>";

	if ($p6 == $r6) {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}

	echo "La septima respuesta es:<br>" .$r7;
	echo "<br><br>";

	if ($p7 == $r7) {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}

	echo "La octava respuestas son:<br>";
	echo "Pez y Camaron";
	echo "<br><br><br>";

	if ($p8 == "rc") {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}

	echo "La novena respuestas son:<br>";
	echo "Trampolines y piscina";
	echo "<br><br><br>";

	if ($p9 == "rc") {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}

	echo "La decima respuestas son:<br>";
	echo "Jugar y alimentarlo";
	echo "<br><br><br>";

	if ($p10 == "rc") {
		echo "Tu respuesta es correcta";
		echo "<br><br><br>";
		$calif++;
	}else{
		echo "Tu respuesta es incorrecta";
		echo "<br><br><br>";
	}


	echo "<br><br>";
	echo " Es: " . "$calif/10";
	echo "<h4>Nombre: Villanueva Zazueta Paul</h4>";
?>
</body>
</html>