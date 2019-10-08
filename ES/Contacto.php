<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Nunito+Sans|Patrick+Hand" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Colegio Jefferson | Contacto</title>
</head>
<body>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<img src="../img/bannerAdmission.jpg" alt="">
			<div class="titleBannerSection">
				<h1>Contacto</h1>
			</div>
		</div>

		
		
		<section class="infoSeccion contacto ">
			<div class="formContacto">
				<div class="titleSecondary admission">
					<h2>
					¿Deseas recibir información de nuestro Colegio?
					</h2>
				</div>
				<p>Si estás interesado en recibir información del Colegio diligencia los siguientes espacios y recibirás a tu Email el folleto institucional.</p>
				
				<form action="" class="formContact">
					<div class="contDateForm">
						<div class="inputInset">
							<input type="text" name="nombre" placeholder="Nombre" required>
							<input type="text" name="celular" placeholder="celular" required>
							<input type="text" name="email" placeholder="Email" required>
						</div>
						<div class="contInput btn">
							<button class="submitOH" type="submit">Enviar</button>
						</div>
					</div>
				</form>

				<p class="date">
					También puedes comunicarte con nosotros a 
					nuestro PBX: (57)(2)6582700. <br>
				<a href="">Revisa aquí el directorio con las diferentes extensiones</a>
				</p>
					
					
			</div>

			<div class="contOpens contact">
				<div class="openHouse">
					<div class="contOH">
						<h3>SUGERENCIAS</h3>
						<p class="titleOH">Para hacer un reclamo,observación o sugerencias acerca del Colegio</p>
						<a href="sugerencias.php" class="btnOH">
							Click Aquí
						</a>
					</div>
				</div>

				<div class="openHouse">
					<div class="contOH">
						<h3>TRABAJA CON NOSOTROS</h3>
						<p class="titleOH">Si deseas ser parte de la Familia Jefferson con tu labor</p>
						<a href="trabaja-nosotros.php" class="btnOH">
							Click Aquí
						</a>
					</div>
				</div>		
			</div>
		</section>


		<?php include_once 'footer.php' ?>

	</div>
</body>
</html>