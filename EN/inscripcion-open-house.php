<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson |Inscripción Open House</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Inscripción Open House</h1>
			</div>
		</div>

		<div class="titleSecondary admission OH">
			<h2>INSCRÍBETE DE MANERA VIRTUAL A NUESTRO OPEN HOUSE 
			PARA LA SECCIÓN DE PREESCOLAR</h2>
		</div>
		
		<section class="infoSeccion OpenHouse">
			<form action="../validate/envioform.php" method="POST">
			<input type="hidden" value="FormOpenHouse" name="nameForm">
				<div class="contInput">
					<div class="subtitleForm">
						Datos Aspirante
					</div>
					<div class="inputInset">
						<input type="text" name="nombre" placeholder="Nombre" required>
						<input type="text" name="apellido" placeholder="Apellido" required>
						<input type="date" name="fechaNacimiento" required>
					</div>
				</div>

				<div class="contInput">
					<div class="subtitleForm">
						Datos Padre de Familia
					</div>
					<div class="inputInset">
						<input type="text" name="nombrePadre" placeholder="Nombre" required>
						<input type="text" name="celularPadre" placeholder="Celular" required>
						<input type="email" name="emailPadre" placeholder="Email" required>
					</div>
					<div class="inputInset radio">
						Egresado CJ				
						<div class="contRadio">
							<div>
								<label for="si">Si</label>
								<input id="si" type="radio" name="egresado" value="male">
							</div>
							<div>
								<label for="no">No</label>
  								<input id="no" type="radio" name="egresado" value="female">
							</div>
						</div>					
					</div>
				</div>

				<div class="contInput">
					<div class="subtitleForm">
						Datos Madre de Familia
					</div>
					<div class="inputInset">
						<input type="text" name="nombreMadre" placeholder="Nombre" required>
						<input type="text" name="celularMadre" placeholder="Celular" required>
						<input type="email" name="emailMadre" placeholder="Email" required>
					</div>
					<div class="inputInset radio">
						Egresado CJ				
						<div class="contRadio">
							<div>
								<label for="siM">Si</label>
								<input id="siM" type="radio" name="egresadoM" value="male">
							</div>
							<div>
								<label for="noM">No</label>
  								<input id="noM" type="radio" name="egresadoM" value="female">
							</div>
						</div>					
					</div>
				</div>

				<div class="contInput text">
					Fecha de Open House <br>
					6 de Abril de 2019
				</div>

				<div class="contInput text politicas">
					I authorize Colegio Jefferson to treat my personal data for internal management in accordance with the <a href="../archives/politicas-tratamiento-de-datos-personales.pdf"> policies of protection of personal data.</a>
					
					<div class="inputInset radio politicas">
						<div class="contRadio ">
							<div>
								<label for="siPoliticas">Acepto</label>
								<input id="siPoliticas" type="radio" name="politicas" value="Acepto" required>
							</div>
						</div>
					</div>
				</div>

				<div class="contInput text">
					<button class="submitOH" type="submit">Enviar</button>
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