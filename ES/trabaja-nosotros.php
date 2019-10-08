<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson |Trabaja con Nosotros</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>TRABAJA CON NOSOTROS</h1>
			</div>
        </div>

		<div class="descriptioSection">
				<p>Bienvenido a la sección de empleo de nuestro Colegio. Por favor completa el siguiente formulario y adjunta tu hoja de vida. Toda la información presentada será tratada como confidencial y sólo será revisada por el área de Gestión Humana.</p>
			</div>
		
		<section class="infoSeccion OpenHouse">

			<form action="../validate/envioform.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" value="FormTrabajar" name="nameForm">
				<div class="contInput sugerencias">			
					<div class="inputInset">
						<input type="text" name="nombre" placeholder="Nombre Completo" required>
						<input type="text" name="telefono" placeholder="Teléfono" required>
						<input type="text" name="titulo" placeholder="Titulo Académico" required>
					</div>
					<div class="inputInset">
						<input type="text" name="cargoAspira" placeholder="Cargo al que aspira" required>
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<div class="inputInset">
						<textarea name="mensaje" id="" placeholder="Descripción de perfil y/o observaciones"></textarea>
					</div>

					<div class="inputInset file">
						<p>Solo se admiten archivos en formato pdf y deben pesar menos de 2 Megabytes (2mb)</p>
						 <input type="file" name="hdv" required>
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