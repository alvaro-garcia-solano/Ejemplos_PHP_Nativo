<!DOCTYPE html>
<html lang="es">
	<?php include_once 'Clases/Persona.php' ?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD PHP</title>
		
		<!-- CSS -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

	<body>

		<div class="row">
			<div class="col-md-12">
				
				<div class="col-md-12" style="margin-top:20px;">
					<a class="btn btn-default" href="AniadirPersona.php" role="button">Añadir persona</a>
					<br/>
				</div>	

				<?php 

					$personas = Persona::recuperarTodos(); 
					//var_dump($personas);	
				?>

				<div class="table-responsive col-md-9" style="margin-top:20px;"> 
					<table class="table table-bordered">
			  			<tr>
							<th>Nombre</th>
							<th>Edad</th>
							<th>Acción</th>
			  			</tr>
			  			
						<?php
							foreach($personas as $persona){
								echo '<tr class=' .$persona['id']. '>';
								echo '<td>' . $persona['nombre'] . '</td>';
								echo '<td>' . $persona['edad'] . '</td>';
								echo '<td> <a href="editarPersona.php?id=' . $persona['id'] .'">Editar</a> <a href="#" class="delete" data="'.$persona['id'].'"> Eliminar </a> </td>';
								echo '</tr>';
							}
						?>
			  				
					</table>
				</div> <!-- .table-responsive -->
			</div><!-- .col-md-12 -->	
		</row><!-- .row -->

		<!--Javasript -->
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script type="text/javascript">

			/*$(window).ajaxComplete(function () {console.log('Ajax Complete'); });
			$(window).ajaxError(function (data, textStatus, jqXHR) {console.log('Ajax Error');
			    console.log('data: ' + data);
			    console.log('textStatus: ' + textStatus);
			        console.log('jqXHR: ' + jqXHR); });
			$(window).ajaxSend(function () {console.log('Ajax Send'); });
			$(window).ajaxStart(function () {console.log('Ajax Start'); });
			$(window).ajaxStop(function () {console.log('Ajax Stop'); });
			$(window).ajaxSuccess(function () {console.log('Ajax Success'); });
			*/
			$(document).ready(function() {
				$('.delete').click(function(){
						
			        //Recogemos la id del contenedor padre
			        //var parent = $(this).attr('id');
			        //alert(parent);
			        //Recogemos el valor del servicio
			        var id = $(this).attr('data');
			        //alert (service);
			        //var dataString = 'service='+service;
			        //alert (dataString);
			        $.ajax({
			            type: "POST",
			            url: "eliminarAjax.php",
			            data: 'id='+id,
			            success: function(data) {
			            	console.log(data);

			            	//Borramos de la tabla la fila
			            	$("tr."+data).remove();
			               
			            },
			            error: function(){
			            	alert(error);
			            }
			        });
	    		});                 
			}); 
		</script>	

	</body>

</html>