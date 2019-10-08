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
				<h1>Inscripción Café con admisiones</h1>
			</div>
		</div>

		<div class="titleSecondary admission OH">
			<h2>INSCRÍBETE DE MANERA VIRTUAL A NUESTRO CAFÉ CON ADMISIONES
			PARA LA SECCIÓN DE PREESCOLAR</h2>
		</div>
		
		<section class="infoSeccion OpenHouse">
			<form action="../validate/envioform.php" method="POST">
			<input type="hidden" value="FormCafe" name="nameForm">
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
								<input id="si" type="radio" name="egresado" value="Si">
							</div>
							<div>
								<label for="no">No</label>
  								<input id="no" type="radio" name="egresado" value="No">
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
								<input id="siM" type="radio" name="egresadoM" value="Si">
							</div>
							<div>
								<label for="noM">No</label>
  								<input id="noM" type="radio" name="egresadoM" value="No">
							</div>
						</div>					
					</div>
				</div>

				<div class="contInput text">
					Fechas de Café con Admisiones 
                </div>
                <div class="inputInset radio">		
						<div class="contRadio cafe">
							<div>
								<label for="mayo24">Mayo 24 de 2019</label>
  								<input id="mayo24" type="radio" name="fecha1" value="Mayo 24">
                            </div>
                            <div>
								<label for="junio07">Junio 07 de 2019</label>
  								<input id="junio07" type="radio" name="fecha2" value="Junio 07">
                            </div>
                            <div>
								<label for="junio14">Junio 14 de 2019</label>
  								<input id="junio14" type="radio" name="fecha3" value="Junio 14">
                            </div>
                           
						</div>					
					</div>

				<div class="contInput text politicas">
					Autorizo al Colegio Jefferson tratar mis datos personales para su gestión interna conforme a su <a href="../archives/politicas-tratamiento-de-datos-personales.pdf" target="_blank">Políticas de Protección de Datos Personales</a>
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