<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | ICT Direction</title>
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
			<section class="contNosotros pedagogico">
			<!-- <h3 class="quehacer">Our Work</h3> -->
				<h2>ICT Direction</h2>
				<div class="grid-col2">
					<div class="imgCol2 tic">
						<img src="../img/img-TIC-1.jpg" alt="">
					</div>

					<div >
						<p><span class="firstLeter">I</span>n the process of developing its educational goals, Colegio Jefferson acknowledges the significant transformations that take place in society thanks to the technological boom. Therefore, the ICT Direction (Information and Communication Technologies) <span id="interactivetext1" class="interactive">seeks to strengthen the attention in citizenship training</span>, which includes digital scenarios.</p>

						<p>This way we not only develop the school's technological infrastructure, but also the guidance we give students and parents through meetings and workshops, and the teacher training of ICT.</p>
					

						<p>School provides audiovisual media, mobile devices, computer equipment, platforms, robots, among other technologies, that enrich the pedagogical proposals of different areas. All this is done under the safe and responsible use of ICT. Therefore, apart from warning, protecting and teaching our students to defend themselves from situations that may negatively affect them, it is necessary that they develop a critical attitude towards media and take advantage of the opportunities offered by new technologies.</p>
					</div>
					
					
				</div>

				<div class="imgpersonero short">
					<div>
						<img class="imgfloatLeft" src="../img/img-TIC-2.jpg" alt="">
					</div>	
					<div>
						<img class="imgfloatLeft" src="../img/img-TIC-3.jpg" alt="">
					</div>	
				</div>
				
			</section>
		</div>

		<?php include_once 'footer.php' ?>

	</div>

	<div class="modal image" id="modal1">
		<div class="contVideoRModal pac image" id="contModal1">
			<i class="fas fa-times-circle" id="closeModal1"></i>
			<div class="modalcontPac">
				<img src="../img/CIUDADANOS-DIGITALES-ingles.jpg" alt="">
			</div>
		</div>
	</div>

	<script>

		let ciudadanoDigital = document.getElementById('interactivetext1');
		let modal1 = document.getElementById('modal1');
		let closeModal1 = document.getElementById('closeModal1');
		let contModal1 = document.getElementById('contModal1');

		function interactiveModal(ciudadanoDigital,modal,closeModal,contModal){

			ciudadanoDigital.onclick = ()=>{

					modal.classList.add("visible");
					contModal.classList.add("fadeUp");
				}


			closeModal.onclick = () =>{
				modal.classList.remove("visible");
			}

		}

		interactiveModal(ciudadanoDigital,modal1,closeModal1,contModal1);

	</script>
	<!-- <script src="../js/deplegable.js"></script> -->
</body>
</html>