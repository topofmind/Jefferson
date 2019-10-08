<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Welcome Back!</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Welcome Back!</h1>
			</div>
        </div>

        <div class="beneficiosAdmision">

            <div class="introText">
                
                <p><span class="firstLeter">E</span>We invite you to remember the nice experiences you lived in our school, keep up with news from colleagues and contact us. To us, the alumni community is very important, since you have contributed to building the School we have today.</p>
        
                <p> <span>hank you for being part of this community!</span></p>

                <p>f you want to stay in touch with your school, you can help us in many ways, for example: being a guest speaker to motivate our students to achieve their dreams or leading your class reunions.
                </p>

                <p>At this moment we are updating the database, so if you are a Jeffex leave us your data!</p>

            </div>

            <div class="vinculo">
				<form action="../validate/envioform.php" method="POST" class="formContact">
				<input type="hidden" value="FormVinculo" name="nameForm">
					<div class="contDateForm">
						<div class="inputInset vinculo">
							<input type="text" name="nombre" placeholder="Full Name" required>
							<input type="text" name="cedula" placeholder="Cedula" required>
							<input type="text" name="promocion" placeholder="Class of " required>
						</div>
						<div class="inputInset vinculo">
							<input type="text" name="fechaCumple" placeholder="Birthday date" required>
							<input type="text" name="celular" placeholder="Cell phone" required>
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
							<button class="submitOH" type="submit">Send</button>
						</div>


					</div>
				</form>
            </div>
		</div>
		
		<section class="galeria-egresados">
			<div class="titleHorzntal">
					<div></div>
						<h2>PHOTO GALLERY</h2>
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