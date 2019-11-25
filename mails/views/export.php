<?php 
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=formulario-cafe-admisiones.xls');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 

	use Mails\Models\Modelo;

	require_once '../Models/Modelo.php';
	$Model = new Modelo();
	$list = $Model->selectData();

	

 ?>

	<table border="1">
		<tr >
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Fecha de Nacimiento</th>
			<th>Jardín</th>
			<th>Dirección</th>
			<th>Fecha Open House</th>
			<th>Nombre Padre</th>
			<th>Celular Padre</th>
			<th>Email Padre</th>
			<th>Profesión Padre</th>
			<th>Cargo Padre</th>
			<th>Egresado</th>
			<th>Nombre Madre</th>
			<th>Celular Madre</th>
			<th>Email Madre</th>
			<th>Profesión Madre</th>
			<th>Cargo Madre</th>
			<th>Egresada</th>
		</tr>

<?php 
	while ($row = $list->fetch(PDO::FETCH_ASSOC)) {
 ?>

	<tr>
		<td><?php echo utf8_encode($row['nombre']); ?></td>
		<td><?php echo utf8_encode($row['apellido']); ?></td>
		<td><?php echo utf8_encode($row['fechaNacimiento']); ?></td>
		<td><?php echo utf8_encode($row['jardin']); ?></td>
		<td><?php echo utf8_encode($row['direccion']); ?></td>
		<td><?php echo utf8_encode($row["fecha1"]) ?></td>

		<td><?php echo utf8_encode($row["nombrePadre"]) ?></td>
        <td><?php echo utf8_encode($row["celularPadre"]) ?></td>
        <td><?php echo utf8_encode($row["emailPadre"]) ?></td>
        <td><?php echo utf8_encode($row["profesionPadre"]) ?></td>
        <td><?php echo utf8_encode($row["cargoPadre"]) ?></td>
        <td><?php echo utf8_encode($row["egresadoPadre"]) ?></td>

        <td><?php echo utf8_encode($row["nombreMadre"]) ?></td>
        <td><?php echo utf8_encode($row["celularMadre"]) ?></td>
        <td><?php echo utf8_encode($row["emailMadre"]) ?></td>
        <td><?php echo utf8_encode($row["profesionMadre"]) ?></td>
        <td><?php echo utf8_encode($row["cargoMadre"]) ?></td>
        <td><?php echo utf8_encode($row["egresadoMadre"]) ?></td>
	</tr>

<?php } ?>

</body>
</html>