


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
$peso=$_GET["peso"];    
   $altura=$_GET["altura"]/100;
   $IMC=($peso/($altura*$altura));
   $ESCALA="";
    if ($IMC<18.5) { $ESCALA="Peso Insuficiente";} 
    if (($IMC>=18.5)&&($IMC<24.99) ){ $ESCALA="Peso Normal";}
    if (($IMC>=25)&&($IMC<26.9) ){ $ESCALA="Sobrepeso Grado I";}
    if (($IMC>=27)&&($IMC<29.9) ){ $ESCALA="Sobrepeso Grado II (Pre-Obesidad)";}
    if (($IMC>=30)&&($IMC<34.9) ){ $ESCALA="Obesidad Tipo I";}
    if (($IMC>=35)&&($IMC<39.9) ){ $ESCALA="Obesidad Tipo II";}
    if (($IMC>=40)&&($IMC<49.9) ){ $ESCALA="Obesidad Tipo III (Morbida)";}
    else { $ESCALA="Obesidad Tipo IV (Extrema)";}
    echo "<br><b>Su indice de masa corporal:$IMC </b><br>$ESCALA";
    
?>

</body>