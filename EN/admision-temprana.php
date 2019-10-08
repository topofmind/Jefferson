<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Early Admission</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Early Admission</h1>
			</div>
		</div>
		
		<section class="infoSeccion admisionTempr">
                <div class="VideoYoutube fullwidth">
					<iframe src="https://www.youtube.com/embed/eA0dozN3SI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
				<div class="introText">
					<p> If you want to receive further information, leave us your personal information and we will contact you.</p>

					<form action="" class="formContact">
					<div class="contDateForm">
						<div class="inputInset vinculo">
							<input type="text" name="nombre" placeholder="Name" required>
							<input type="text" name="celular" placeholder="Cell Phone" required>
							<input type="email" name="email" placeholder="Email" required>
						</div>
						<div class="inputInset vinculo date">
							<label for="">Fecha de nacimiento del aspirante</label>
							<input class="inputLarge" type="date" name="fechaNacimiento" required>
							
						</div>
						
						<div class="inputInset  politicas contact">
							I authorize Colegio Jefferson to treat my personal data for internal management in accordance with the <a href="../archives/politicas-tratamiento-de-datos-personales.pdf"> policies of protection of personal data.</a>

							<div class="contRadio">
						
								<label for="siPoliticas">Acepto</label>
								<input id="siPoliticas" type="radio" name="politicas" value="Acepto" required>
							
							</div>
						</div>

						<div class="contInput btn">
							<button class="submitOH" type="submit">Send</button>
						</div>


					</div>
				</form>
				</div>
        </section>

		


		<?php include_once 'footer.php' ?>

	</div>

</body>
</html>