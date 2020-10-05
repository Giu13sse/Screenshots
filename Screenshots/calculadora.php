

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
     
        
    $operando1 = $_GET["operando1"];
	$operando2 = $_GET["operando2"];
	$operador = $_GET["operador"];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
    echo "La Resultado es: ".$solucion;


?>

</body>