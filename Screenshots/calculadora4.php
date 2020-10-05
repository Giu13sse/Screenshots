

<!DOCTYPE html>

<html>
	<head>
    <meta charset="UTF-8">
		<title>Operaciones</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="calculo.php">Calculadora</a>
  <a href="imc.php">Masa Corporal</a>
  <a href="salario.php">Salario</a>
  <a href="step.php">StrigStep</a>
  <a href="biotipo.php">Biotipo</a>
  
</div>
<?php
    
   $altura=$_GET["altura"];
   $ESCALA="";
    if ($altura<170) { $ESCALA="(Biotipo Bajo)";} 
    if (($altura>=170)&&($altura<=180) ){ $ESCALA="(Biotipo Normal)";}
    if ($altura>180){ $ESCALA="(Biotipo Superior)";}
    echo "<br><b>Su estatura:$altura cms </b><br>$ESCALA";  
?>
</body>