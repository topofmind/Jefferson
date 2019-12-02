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
				<h1>Join us for coffee!</h1>
			</div>
		</div>

		<div class="titleSecondary admission OH">
			<h2>Online registration to have coffee with the admission staff and get to know our School</h2>
		</div>
		
		<section class="infoSeccion OpenHouse">

		<!-- <div class="no-inscription">
			<h3>Por el momento no tenemos fecha para el café con admisiones, para más información comunicarse al: PBX + 57(2)6582700 ext 111</h3>
		</div> -->

		<form action="../validate/envioform.php" method="POST">
			<input type="hidden" value="FormCafe" name="nameForm">
				<div class="contInput">
					<div class="subtitleForm">
						Child information
					</div>
					<div class="inputInset">
						<input type="text" name="nombre" placeholder="Name" required>
						<input type="text" name="apellido" placeholder="Last Name" required>
						<input type="date" name="fechaNacimiento"  placeholder="Date of Birth" required>
					</div>
					<div class="inputInset col2">
						<input type="text" name="jardin" placeholder="Current Kindergarten or School" required>
						<input type="text" name="direccion" placeholder="Home Address" required>
						
					</div>
				</div>

				<div class="contInput">
					<div class="subtitleForm">
						Father´s information
					</div>
					<div class="inputInset">
						<input type="text" name="nombrePadre" placeholder="Name" required>
						<input type="text" name="celularPadre" placeholder="Cellphone number" required>
						<input type="email" name="emailPadre" placeholder="Email" required>	
					</div>
					<div class="inputInset col2">
						<input type="text" name="profesion" placeholder="Occupation" required>		
						<input type="text" name="cargo" placeholder="Position" required>	
					</div>
					<div class="inputInset radio">
						Jefferson Alumni?				
						<div class="contRadio">
							<div>
								<label for="si">Yes</label>
								<input id="si" type="radio" name="egresado" value="Si" required >
							</div>
							<div>
								<label for="no">No</label>
  								<input id="no" type="radio" name="egresado" value="No" required >
							</div>
						</div>					
					</div>
				</div>

				<div class="contInput">
					<div class="subtitleForm">
						Mother´s information
					</div>
					<div class="inputInset">
						<input type="text" name="nombreMadre" placeholder="Name" required>
						<input type="text" name="celularMadre" placeholder="Cellphone number" required>
						<input type="email" name="emailMadre" placeholder="Email" required>
					</div>
					<div class="inputInset col2">
						<input type="text" name="profesionMadre" placeholder="Occupation" required>
						<input type="text" name="cargoMadre" placeholder="Position" required>		
					</div>
					<div class="inputInset radio">
						Jefferson Alumni?			
						<div class="contRadio">
							<div>
								<label for="siM">Yes</label>
								<input id="siM" type="radio" name="egresadoM" value="Si" required>
							</div> 
							<div>
								<label for="noM">No</label>
  								<input id="noM" type="radio" name="egresadoM" value="No" required>
							</div>
						</div>					
					</div>
				</div>

				<div class="contInput text">
					Choose a date to join us for coffee: 
                </div>
                <div class="inputInset radio">		
						<div class="contRadio cafe">
							
						<div>
								<label for="Diciembre05">December 05, 2019</label>
  								<input id="Diciembre05" type="radio" name="fecha1" value="Diciembre 05" >
                            </div>

                            <div>
								<label for="Diciembre06">December 06, 2019 (Cupo lleno)</label>
  								<input id="Diciembre06" type="radio" name="fecha1" value="Diciembre 06" >
                            </div>

                            <div>
								<label for="Diciembre12">December 12, 2019</label>
  								<input id="Diciembre12" type="radio" name="fecha1" value="Diciembre 12" >
                            </div>
                           
						</div>					
					</div>

				<div class="contInput text politicas">
					I authorize Colegio Jefferson to treat my personal data for internal management in accordance with the  <a href="../archives/politicas-tratamiento-de-datos-personales.pdf" target="_blank">Personal Data Privacy Policy</a>
					<div class="inputInset radio politicas">
						<div class="contRadio ">
							<div>
								<label for="siPoliticas">Accept</label>
								<input id="siPoliticas" type="radio" name="politicas" value="Acepto" required>
							</div>
						</div>
					</div>
				</div>

				<div class="contInput text">
					<button class="submitOH" type="submit">Send</button>
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