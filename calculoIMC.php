<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calcule aqui seu IMC</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="calculoIMC.php" method="POST">
			Nome: <input type="text" name="nome"><br>
			Altura: <input type="text" name="altura"><br>
			Peso: <input type="text" name="peso"><br>
			<button type="submit">Calcular IMC</button>
		</form>

		<?php 
			$altura = $_REQUEST["altura"];
			$peso = $_REQUEST["peso"];
			$nome = $_REQUEST['nome'];

			$imc = $peso / ($altura * $altura);
			$imc = number_format($imc, 2);
			$classe = "você está ";
			if($imc < 18.5){
				$classe .= "abaixo do peso";
			}elseif($imc < 24.9){
				$classe .= "no peso normal";
			}elseif($imc < 29.9){
				$classe .= "sobrepeso";
			}elseif($imc < 34.9){
				$classe .= "obesidade 1";
			}elseif($imc < 39.9){
				$classe .= "obesidade 2";
			}else{
				$classe .= "obesidade 3";
			}


			echo "Olá $nome seu IMC atual é: $imc e $classe";
		?>

	</div>
</body>
</html>