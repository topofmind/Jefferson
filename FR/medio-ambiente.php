<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Medio Ambiente</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>PROYECTO PEDAGÓGICO</h1>
		</div>
		<div class="nosotros">
			<?php include_once 'menuProyectoPed.php' ?>
			<section class="contNosotros pedagogico textInteractive">
				<!-- <h3 class="quehacer">Nuestro Quehacer</h3> -->
				<h2>Compromiso con el medio ambiente</h2>
				<div>
					<img class="imgfloatLeft" src="../img/imgMedioAmbiente1.jpg" alt="">
					<p><span class="firstLeter">D</span>esde nuestra propuesta pedagógica nos proponemos sensibilizar a los estudiantes para que establezcan una relación amigable y respetuosa con la flora y la fauna, especialmente con la que nos rodea en el ambiente escolar, y para que asuman un uso concienzudo de los recursos naturales.</p>
					<p>Estamos convencidos que la sensibilización es primordial para asumir como propio el trabajo de cuidar el medio ambiente. Por esta razón, nuestros estudiantes de Preescolar cuidan el <span id="interactivetext1" class="interactive">mariposario a cielo abierto</span> de su sección y aprenden mediante la observación que especies se benefician de este espacio. En Primaria nuestros niños de Segundo tienen el <span id="interactivetext2" class="interactive">proyecto de la huerta escolar</span>, espacio para sembrar, cuidar y cosechar rábanos, pepinos y hojas aromáticas que después aprenden a preparar y comer. En Junior y Senior se proponen <span id="interactivetext3" class="interactive">proyectos desde la ecología</span>, incentivando en nuestros estudiantes la creatividad para plantear propuestas a problemas ambientales actuales.</p>

				</div>
					
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
	
	<!-- <script src="../js/deplegable.js"></script> -->
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
</body>
</html>