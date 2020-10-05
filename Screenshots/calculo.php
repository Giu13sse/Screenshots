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
	<div class="content">
		<h1>Calculadora</h1>
        <form method="get" action="calculadora.php">
		<input type="text" name="operando1">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
		<input type="text" name="operando2">
		<input type="submit" value="enviar">
	</form>
	</body>
</html>