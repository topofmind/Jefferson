<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson |Sugerencias</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>SUGERENCIAS</h1>
			</div>
        </div>

		<div class="descriptioSection">
				<p>Queremos saber qué piensas y sientes sobre los diferentes procesos que se desarrollan en el Colegio,
				para esto te invitamos a hacer uso del canal <b>Sugerencias</b> a través de nuestra web, APP o del email <b>suregencias@jefferson.edu.co</b>, tu información la revisaremos y entregaremos a la sección o al área encargada para hacer el seguimiento y darte una respuesta lo más pronto posible.</p>
			</div>
		
		<section class="infoSeccion OpenHouse">

			<form action="../validate/envioform.php" method="POST">
				<input type="hidden" value="FormSugerencias" name="nameForm">
				<div class="contInput sugerencias">			
					<div class="inputInset">
						<input type="text" name="nombre" placeholder="Nombre" required>
						<input type="text" name="direccion" placeholder="Dirección" required>
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<div class="inputInset">
						<input type="text" name="telefono" placeholder="Telefono" required>
						<input type="text" name="tipoSolicitud" placeholder="Tipo de solicitud" required>
						<input type="text" name="asunto" placeholder="Asunto" required>
					</div>



					<div class="inputInset">
						<textarea name="mensaje" id="" placeholder="mensaje" required></textarea>
					</div>

					
					<div class="inputInset  politicas">
						Autorizo al Colegio Jefferson tratar mis datos personales para su gestión interna conforme a su <a href="../archives/politicas-tratamiento-de-datos-personales.pdf" target="_blank">Políticas de Protección de Datos Personales</a>
						<div class="contRadio">
						
							<label for="siPoliticas">Acepto</label>
							<input id="siPoliticas" type="radio" name="politicas" value="Acepto" required>
							
						</div>
					</div>

					<div class="contInput text">
						<button class="submitOH" type="submit">Enviar</button>
					</div>

				</div>
			</form>
			
		</section>


		<?php include_once 'footer.php' ?>

		<div class="modal" id="modal">
			<div class="contVideoRModal admisiones" id="contModal">
				<i class="fas fa-times-circle" id="closeModal"></i>
				<div class="modalcontPac">
					<div class="cafeAdmisiones">
						<div class="imgCafe">
							<img src="../img/logo-cafeAdmisiones.png" alt="">
						</div>
						<div class="descriptionCafeModal">
							<p>Durante este encuentro te presentaremos nuestra metodología, así conocerás cómo llevamos a cabo la labor de educar a nuestros estudiantes. También te explicaremos las dinámicas de nuestro querido Colegio Jefferson y del proceso de admisión.

							Además, daremos un recorrido por las instalaciones, por lo que te pedimos asistir en ropa y zapatos cómodos.</p>

							<p class="lineP">
							Todos los viernes de 8 a 10 am</p>
							<p class="lineP"><span>Inscribete ya y separa tu viernes</span></p>
							<p class="lineP">
							Email: asismercadeo@jefferdon.edu.co
							</p>
							<p class="lineP">PBX 6582700 ext 111</p>
							<p><span class="titleCafe">!Te Esperamos!</span></p>
						
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


</body>
</html>