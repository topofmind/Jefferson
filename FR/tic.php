<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | TIC</title>
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
			<section class="contNosotros pedagogico">
				<!-- <h3 class="quehacer">Nuestro Quehacer</h3> -->
				<h2>DIRECCIÓN TIC</h2>

				<div class="grid-col2">
					<div class="imgCol2 tic">
						<img src="../img/img-TIC-1.jpg" alt="">
					</div>

					<div >
						<p><span class="firstLeter">E</span>l Colegio Jefferson en la búsqueda de desarrollar sus propósitos educativos reconoce las profundas transformaciones que se están dando en la sociedad gracias al auge tecnológico. En este sentido la Dirección de las TIC (Tecnologías de la información y las comunicaciones) <span id="interactivetext1" class="interactive">busca fortalecer el enfoque de la formación en ciudadanía</span>, la cual incluye los escenarios digitales.</p>

						<p>Desde esta instancia no sólo se orienta el desarrollo de la infraestructura tecnológico del Colegio, sino también el acompañamiento a los estudiantes y padres de familia a través de charlas y talleres, y la formación de los maestros en el uso de las TIC.</p>
					

						<p>El Colegio cuenta con medios audiovisuales, dispositivos móviles, equipos de cómputo, plataformas, robots, entre otras tecnologías, para enriquecer las propuestas pedagógicas de las distintas áreas del conocimiento, las cuales tienen en cuenta el uso seguro y responsable de las TIC. Por eso, además de advertir, proteger y enseñar a nuestros estudiantes a defenderse de situaciones que pueden afectarlos negativamente, es necesario que desarrollen una actitud crítica hacia los medios y aprovechen las oportunidades que brindan las nuevas tecnologías.</p>
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
				<img src="../img/CIUDADANOS-DIGITALES.jpg" alt="">
			</div>
		</div>
	</div>

	<!-- <script src="../js/deplegable.js"></script> -->
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

</body>
</html>