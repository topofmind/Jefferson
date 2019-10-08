<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Commitment with the environment</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>Educational Project</h1>
		</div>
		<div class="nosotros">
			<?php include_once 'menuProyectoPed.php' ?>
			<section class="contNosotros pedagogico textInteractive">
			<!-- <h3 class="quehacer">Our Work</h3> -->
				<h2>Committed to the Environment</h2>
				<div>
					<img class="imgfloatLeft" src="../img/imgMedioAmbiente1.jpg" alt="">
					<p><span class="firstLeter">O</span>ur pedagogical proposal encourages students to establish a friendly and respectful relationship with the flora and fauna in any environment; especially the one around us in school. Also, we guide students to be aware of the rightful use of our natural resources.</p>

					<p>We are convinced that awareness is most important when assuming the great responsibility of taking care for the environment. Hence, our preschool students take care of their <span id="interactivetext1" class="interactive">outdoor butterfly garden </span> and through observation learn which species benefit from it. In Primary our second grade children have the <span id="interactivetext2" class="interactive">Vegetable Garden project </span> where they plant, take care of their seedlings and when the time has come, harvest radishes, cucumbers and aromatic leaves which they learn to prepare and eat. In Junior and Senior <span id="interactivetext3" class="interactive">ecology projects</span> are enhanced, encouraging students to make proposals to current environmental problems</p>
					

				</div>

						

						<div>
							<div class="gleriaFotosSeccion">
								<section class="utilitiesSeccion">
									<div class="gleriaFotosSeccion">
										<div class="titleHorzntal mAmbiente">
											<h2>GALERÍA DE FOTOS</h2>
										</div>

										<div class="contImgGalery mAmbiente">
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-3.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-2.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-1.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-9.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-4.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-5.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-6.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-7.jpg" alt="">
											</div>
											<div class="imgGalery">
												<img class="imageG" src="../img/gallery-medioambiente-8.jpg" alt="">
											</div>

										</div>	

									</div>
								</section>
							</div>
					
			</section>
		</div>

		<?php include_once 'footer.php' ?>

	</div>

	<?php include_once 'modals.php' ?>

	<div class="modal image" id="modalGalery">
		<div class="contVideoRModal pac image" id="contModalGalery">
			<i class="fas fa-times-circle" id="closeModalGalery"></i>
			<div class="modalcontPac">
				<img id="imgContainer" src="" alt="">
			</div>
		</div>
	</div>

	<script>
		let interactivetext1 = document.getElementById('interactivetext1');
		let interactivetext2 = document.getElementById('interactivetext2');
		let interactivetext3 = document.getElementById('interactivetext3');

		let modal1 = document.getElementById('modal1');
		let closeModal1 = document.getElementById('closeModal1');
		let contModal1 = document.getElementById('contModal1');

		let modal2 = document.getElementById('modal2');
		let closeModal2 = document.getElementById('closeModal2');
		let contModal2 = document.getElementById('contModal2');

		let modal3 = document.getElementById('modal3');
		let closeModal3 = document.getElementById('closeModal3');
		let contModal3 = document.getElementById('contModal3');

			let closeModalGalery = document.getElementById('closeModalGalery');
	let modalGalery = document.getElementById('modalGalery');
	let contModalGalery = document.getElementById('contModalGalery');
	let imageGalery = document.getElementsByClassName('imageG');
	let imgContainer = document.getElementById('imgContainer')

	
	function interactiveModal(text,modal,closeModal,contModal){

		text.onclick = ()=>{

				modal.classList.add("visible");
				contModal.classList.add("fadeUp");
			}
		

		closeModal.onclick = () =>{
			modal.classList.remove("visible");
		}

	}

	interactiveModal(interactivetext1,modal1,closeModal1,contModal1);
	interactiveModal(interactivetext2,modal2,closeModal2,contModal2);
	interactiveModal(interactivetext3,modal3,closeModal3,contModal3);

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
	<!-- <script src="../js/deplegable.js"></script> -->
</body>
</html>