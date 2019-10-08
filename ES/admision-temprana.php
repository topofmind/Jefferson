<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Admisión Temprana</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Admisión temprana</h1>
			</div>
		</div>
		
		<section class="infoSeccion admisionTempr">
                <div class="VideoYoutube fullwidth">
					<iframe src="https://www.youtube.com/embed/eA0dozN3SI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
				<div class="introText">
					<p> Si quieres recibir más información déjanos tus datos y te contactaremos</p>

					<form action="" class="formContact">
					<div class="contDateForm">
						<div class="inputInset vinculo">
							<input type="text" name="nombre" placeholder="Nombre" required>
							<input type="text" name="celular" placeholder="Celular" required>
							<input type="email" name="email" placeholder="Email" required>
						</div>
						<div class="inputInset vinculo date">
							<label for="">Fecha de nacimiento del aspirante</label>
							<input class="inputLarge" type="date" name="fechaNacimiento" required>
							
						</div>
						
						<div class="inputInset  politicas contact">
							Autorizo al Colegio Jefferson tratar mis datos personales para su gestión interna conforme a su <a href="">Políticas de Protección de Datos Personales</a>
							<div class="contRadio">
						
								<label for="siPoliticas">Acepto</label>
								<input id="siPoliticas" type="radio" name="politicas" value="Acepto" required>
							
							</div>
						</div>

						<div class="contInput btn">
							<button class="submitOH" type="submit">Enviar</button>
						</div>


					</div>
				</form>
				</div>
        </section>

		


		<?php include_once 'footer.php' ?>

	</div>

</body>
</html>