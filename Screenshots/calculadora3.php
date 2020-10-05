
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
$zapato=$_GET["zapato"];     
$value=30000;
$vltotal=0;
$vlza=0;
$vlt=0;

if($zapato<3){
    $vltotal=($zapato*$value);
    $vlt=$vltotal;
    $vlza=$vlt/$zapato;
}

else if($zapato==3){
    $vltotal=($zapato*$value);
    $vlt=$vltotal-($vltotal*0.10);
    $vlza=$vlt/$zapato;
}
else if($zapato>=4 && $zapato<=8){
    $vltotal=($zapato*$value);
    $vlt=$vltotal-($vltotal*0.20);
    $vlza=$vlt/$zapato;
}
else{
    $vltotal=($zapato*$value);
    $vlt=$vltotal-($vltotal*0.50);
    $vlza=$vlt/$zapato;
}

   
    
    echo "<br><b>Valor total de compra:$vlt </b><br>Valor De Cada Par De Zapatos:$vlza";
    
?>
</html>