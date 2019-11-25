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
			PARA LA SECCIÓN DE PREPRIMARIA</h2>
		</div>
		
		<section class="infoSeccion OpenHouse">

		<!-- <div class="no-inscription">
			<h3>Por el momento no tenemos fecha para el café con admisiones, para más información comunicarse al: PBX + 57(2)6582700 ext 111 </h3>
		</div>
		 -->
		 <form action="../validate/envioform-prueba.php" method="POST" id="formulario">
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
					<div class="inputInset col2">
						<input type="text" name="jardin" placeholder="Jardín o Colegio" required>
						<input type="text" name="direccion" placeholder="Dirección/Barrio" required>
						
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
					<div class="inputInset col2">
						<input type="text" name="profesion" placeholder="Profesión" required>		
						<input type="text" name="cargo" placeholder="Cargo" required>	
					</div>
					<div class="inputInset radio">
						Egresado CJ				
						<div class="contRadio">
							<div>
								<label for="si">Si</label>
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
						Datos Madre de Familia
					</div>
					<div class="inputInset">
						<input type="text" name="nombreMadre" placeholder="Nombre" required>
						<input type="text" name="celularMadre" placeholder="Celular" required>
						<input type="email" name="emailMadre" placeholder="Email" required>
					</div>
					<div class="inputInset col2">
						<input type="text" name="profesionMadre" placeholder="Profesión" required>
						<input type="text" name="cargoMadre" placeholder="Cargo" required>		
					</div>
					<div class="inputInset radio">
						Egresado CJ				
						<div class="contRadio">
							<div>
								<label for="siM">Si</label>
								<input id="siM" type="radio" name="egresadoM" value="Si" required>
							</div> required
							<div>
								<label for="noM">No</label>
  								<input id="noM" type="radio" name="egresadoM" value="No" required>
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
								<label for="Noviembre15">Noviembre 15 de 2019</label>
  								<input id="Noviembre15" type="radio" name="fecha1" value="Noviembre 15" >
                            </div>

                            <div>
								<label for="Noviembre22">Noviembre 22 de 2019</label>
  								<input id="Noviembre22" type="radio" name="fecha1" value="Noviembre 22" >
                            </div>

                            <div>
								<label for="Noviembre29">Noviembre 29 de 2019</label>
  								<input id="Noviembre29" type="radio" name="fecha1" value="Noviembre 29" >
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

				<input type="hidden" name="idioma" value="es">

				<div class="contInput text">
					<button class="submitOH" id="submitOH" type="submit">Enviar</button>
				</div>
			</form>
			
		</section>


		<?php include_once 'footer.php' ?>


	</div>

<script>

	let btn = document.getElementById('submitOH');

	btn.onclick = (e)=>{

		e.preventDefault();

		const data = new FormData(document.getElementById('formulario'));

		fetch('../mails/Controllers/controller-mails.php', {
	   		method: 'POST',
	   		body: data
		})
		.then(function(response) {
	    if(response.ok) {
	       return response.text()
	    } else {
	       throw "Error en la llamada Ajax";
	    }

		})
		.then(function(texto) {
		   console.log(texto);
		})
		.catch(function(err) {
		   console.log(err);
		});
	}
	

</script>

</body>
</html>