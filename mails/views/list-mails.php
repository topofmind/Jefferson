<?php require_once './sesion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<style>
		table{
			text-align:center;
		}
		.bottonSub{
			padding:1em;
		}
		.fa-backspace{
			color:#dc3545;
		}
		.btnEliminar{
			cursor: pointer;
		}
	</style>
</head>
<body>

	<br>

	<div class="container">
		<div class="row">
			<h1>Lista de Correos Café con Admisiones</h1>
		</div>

		<br>

		<div class="row bottonSub">
			<a href="export.php">
				<button class="btn btn-success" type="submit">Exportar Lista <i class="fas fa-file-excel"></i></button>
			</a>
		</div>

		<div class="row">
			<table class="table">
			  <thead>
			    <tr>

			      <th scope="col">Aspirante</th>
			      <th scope="col">Fecha Open House</th>
			      <th scope="col">Ver Toda la Info</th>
			      <th scope="col">Eliminar</th>

			    </tr>
			  </thead>
			  <tbody>

				<?php 

					use Mails\Models\Modelo;

					require_once '../Models/Modelo.php';
					$Model = new Modelo();
					$list = $Model->selectData();

					while ($row = $list->fetch(PDO::FETCH_ASSOC)) {
					
				?>


					<tr>
					<td><?php echo utf8_encode($row["nombre"]); ?> <br>	<?php echo utf8_encode($row["apellido"]); ?></td>
					<td><?php echo utf8_encode($row["fecha1"]); ?></td>
					<td>
						<a href="aspirante-detalle.php?id=<?php echo $row["id"];?>">
							<i class="fas fa-external-link-alt"></i>
						</a>
					</td>
					<td><a class="btnEliminar" data-toggle="modal" data-target="#exampleModal-<?php echo $row["id"];?>">
							<i class="fas fa-backspace"></i>
						</a>
					</td>
					</tr>
			    
			    <?php 	
					} ?>
			  </tbody>
			</table>
		</div>
	</div>

	<?php 
		$list2 = $Model->selectData();
		while ($row2 = $list2->fetch(PDO::FETCH_ASSOC)) {

	 ?>

	<div class="modal fade" id="exampleModal-<?php echo $row2["id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Eliminar Aspirante</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ¿Estas Seguro que deseas eliminar a este aspirante?
	      </div>
	      <div class="modal-footer">
	     
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar

	        <a href="../Controllers/controller-delete-mails.php?id=<?php echo $row2["id"];?>">
	      		<button type="button" class="btn btn-danger">Eliminar</button>	
	      	</a>
	        
	      </div>
	    </div>
	  </div>
	</div>

	<?php } ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>