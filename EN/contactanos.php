<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Contact Us</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Contact Us</h1>
			</div>
        </div>
	
		<section class="infoSeccion contacto ">
			<div class="formContacto">
				<div class="titleSecondary admission">
					<h2>
					Would you like to receive information from our School?
					</h2>
				</div>
				<p>If you want to receive further information, leave us your personal details and we will send you our School information.</p>
				
				<form action="../validate/envioform.php" method="POST" class="formContact">
					<input type="hidden" value="FormContacto" name="nameForm">
					<div class="contDateForm">
						<div class="inputInset">
							<input type="text" name="nombre" placeholder="Nombre" required>
							<input type="text" name="celular" placeholder="celular" required>
							<input type="email" name="email" placeholder="Email" required>
						</div>
						
						<div class="inputInset  politicas contact">
							I authorize Colegio Jefferson to treat my personal data for internal management in accordance with the <a href="../archives/politicas-tratamiento-de-datos-personales.pdf"> policies of protection of personal data.</a>

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

				<p class="date">
					También puedes comunicarte con nosotros a 
					nuestro PBX: (57)(2)6582700. <br>
				<a href="../archives/directorio-2018-2019.jpg" target="_blank">Revisa aquí el directorio con las diferentes extensiones</a>
				</p>
					
					
			</div>

			<div class="contOpens contact">
				<div class="openHouse boxSuge">
					<div class="contBoxSuge">
						<h3>SUGERENCIAS</h3>
						<p class="titleOH">If you have any suggestions, ideas or comments about how to improve, please feel free to write to us. Click here!.</p>
						<a href="sugerencias.php" class="btnOH">
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