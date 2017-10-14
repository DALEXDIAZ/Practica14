<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CALCULADORA BASICA EN PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	
</head>
<body>
<center>
	<h1 id="letra">CALCULADORA BASICA</h1>
<table>
	<tr>
		<th>
	<form action="" method="POST" name="calculadora">		
		<input type="number" name="valor1" placeholder=" Primer valor "><br><br>
		<input type="number" name="valor2" placeholder=" Segundo valor "><br><br>
		<input type="submit" name=calcular value="Calcular">		
	</form>
</th>
</tr>
		
<tr>
	<th>
	<h3>Resultados: </h3>	
<?php
if (isset($_POST['calcular'])){

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];



if($valor1=='' or $valor2=='')
	echo '<br>llene todos los campos.';
else{

	$suma = $valor1 + $valor2;
	$resta = $valor1 - $valor2;
	$multi = $valor1 * $valor2;
	$div = $valor1 / $valor2;

	echo 'Valor 1 = '.$valor1.'<br>';
	echo'Valor 2 = '.$valor2.'<br><br>';

	echo $valor1.' + '.$valor2.' = '.$suma.'<br>';
	echo $valor1.' - '.$valor2.' = '.$resta.'<br>';
	echo $valor1.' x '.$valor2.' = '.$multi.'<br>';
	echo $valor1.' / '.$valor2.' = '.$div.'<br>';
	}

}
?>
</th>
</tr>
</table>
</center>
</body>
</html>