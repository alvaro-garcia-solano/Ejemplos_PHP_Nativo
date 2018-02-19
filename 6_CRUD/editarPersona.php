<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Editar - CRUD PHP</title>
		
		<!-- CSS -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

	<body>

		<?php
			require_once 'Clases/Persona.php';
			$persona = Persona::buscarPorId($_GET['id']);
		?>
			
		<div class="row">
			<div class="col-md-3" style="margin-top:20px; margin-left:20px;">	

				<form action="actionAniadir.php" method="post">
					<div class="form-group">	
						<label for="nombre"> Nombre</label>
						<input type="text" class="form-control" name="nombre" value=" <?php echo $persona->getNombre();  ?> " />	
					</div>
					<div class="form-group">	
						<label for="edad"> Edad</label>
						<input type="text" class="form-control" name="edad" value=" <?php echo $persona->getEdad();  ?> " />	
					</div>

					<button type="submit" class="btn btn-default">Editar</button>
				</form>
			</div>
		</div>		
	</body>

</html>	
