<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catalogo de produtos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Catálogo de produtos</h1>
		</div>
		<div class="row">
			<div class="col-md-4"> 
				<form action="descricao.php" method="GET">
					<div class="form-group">
						<select class="form-control" name="id_produto">
							<option value="1">Fogão</option>
							<option value="2">Cadeira</option>
							<option value="3">TV</option>
							<option value="4">Computador</option>
						</select>
					</div>
					<button type="submit" class="btn">Ver detalhes</button>
				</form>
			</div>
		</div>

		<div class="row">
			<h1>Detalhes do produto</h1>
		</div>
		<div class="row">
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</body>
</html>