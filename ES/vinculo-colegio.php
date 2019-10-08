<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Vínculo con el Colegio</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Vínculo con el Colegio</h1>
			</div>
        </div>

        <div class="beneficiosAdmision">

            <div class="introText">
                
                <p><span class="firstLeter">E</span>n este espacio podrás recordar todo lo vivido en nuestro Colegio, mantenerte al tanto de las noticias de tus compañeros y  contactarnos. Para nosotros es muy importante nuestra comunidad de egresados, ya que han aportado a construir el Colegio que somos hoy.</p>
        
                <p> <span>¡Gracias por ser parte de esta comunidad!</span></p>

                <p>Si deseas seguir conectado con tu Colegio, puedes ayudarnos de muchas maneras, por ejemplo siendo orador invitado para motivar a nuestros estudiantes a alcanzar sus sueños o liderando los reencuentros de tu promoción
                </p>

                <p>En este momento nos encontramos actualizando la base de datos, así que si eres un Jeffex ¡Déjanos tus datos!</p>

            </div>

            <div class="vinculo">
				<form action="../validate/envioform.php" method="POST" class="formContact">
				<input type="hidden" value="FormVinculo" name="nameForm">
					<div class="contDateForm">
						<div class="inputInset vinculo">
							<input type="text" name="nombre" placeholder="Nombre Completo" required>
							<input type="text" name="cedula" placeholder="Cedula" required>
							<input type="text" name="promocion" placeholder="Promoción" required>
						</div>
						<div class="inputInset vinculo">
							<input type="text" name="fechaCumple" placeholder="Fecha Cumpleaños" required>
							<input type="text" name="celular" placeholder="Celular" required>
							<input type="email" name="email" placeholder="Email" required>
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
		</div>
		
		<section class="galeria-egresados">
			<div class="titleHorzntal">
					<div></div>
						<h2>GALERÍA DE FOTOS</h2>
					<div></div>
			</div>
			<div class="contImgGalery">
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-8.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-1.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-2.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-3.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-4.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-5.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-6.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="./../img/gallery-egresados-7.jpg" alt="">
				</div>
			</div>
		</section>
        
		<?php include_once 'footer.php' ?>

	</div>
	
	<div class="modal image" id="modalGalery">
		<div class="contVideoRModal pac image" id="contModalGalery">
			<i class="fas fa-times-circle" id="closeModalGalery"></i>
			<div class="modalcontPac">
				<img id="imgContainer" src="" alt="">
			</div>
		</div>
	</div>

<script>

	let closeModalGalery = document.getElementById('closeModalGalery');
	let modalGalery = document.getElementById('modalGalery');
	let contModalGalery = document.getElementById('contModalGalery');
	let imageGalery = document.getElementsByClassName('imageG');
	let imgContainer = document.getElementById('imgContainer');

	closeModalGalery.onclick = () =>{
		modalGalery.classList.remove("visible");
	}

	Array.prototype.forEach.call(imageGalery, function(element){
		element.onclick = function(){
			imgContainer.src = this.src;
			modalGalery.classList.add("visible");
			contModalGalery.classList.add("fadeUp");
			// alert(this.src);
		}
	})

</script>
</body>
</html>