
<!DOCTYPE html>

<html>
	<head>
    <meta charset="UTF-8">
		<title>Operaciones</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<input type="submit" value="Volver" onclick(href="index.php") >
</body>
<?php
$peso=$_GET["peso"];   
$salario=0;  
$horasExtras=0;  
    if ($peso<40) { $salario = $peso*20000;
    
    }
    else{
        $horasExtras = $peso-40;
        $salario = ($horasExtras*25000) + (40*20000);
    
    } 
    
    echo "<br><b>Sus horas trabajadas:$peso </b><br>Su Salario Semanal:$salario";
    
?>
</html>