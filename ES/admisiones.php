<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson |Admisiones</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Proceso de admisión</h1>
			</div>
		</div>

		
		<section class="infoSeccion admission column">
			<div class="description">
				
				<img src="../img/img-proceso-admisiones.jpg" alt="">
				<button id="listMaterial" class="btnAdmision"><a href="../archives/Formulario-de-admisiones.pdf" target="_blank"><i class="fas fa-download"></i>Descarga tu formulario de aplicación aquí</a></button>
			</div>
			<div class="contOpens">
				<!-- <div class="openHouse">
					<div class="contOH">
						<a href="inscripcion-open-house.php">
							<img src="../img/img-OpenHouse.jpg" alt="">
						</a>
					</div>
				</div> -->
				<div class="cafeAdmisiones">
					<div class="imgCafe">
						<img src="../img/logo-cafeAdmisiones.png" alt="">
					</div>
					<div class="descriptionCafe">
						<p>Durante este encuentro te presentaremos nuestra metodología, así conocerás cómo llevamos a cabo la labor de educar a nuestros estudiantes. <br>
						Todos los viernes de 8 a 10 am. <br> Inscríbete y separa tu cupo.</p>

						<button id="cafeAdmisiones" class="btnCafe">
							Leer Más
						</button>

						<a href="inscripcion-cafe-admisiones.php">
							<button id="cafeAdmisiones" class="btnCafe inscribete">
								Inscríbete Aquí
							</button>
						</a>
					
					</div>
				</div>
			</div>
		</section>


		<?php include_once 'footer.php' ?>

	<div class="modal" id="modal">
		<div class="contVideoRModal admisiones" id="contModal">
			<i class="fas fa-times-circle" id="closeModal"></i>
			<div class="modalcontPac">
				<div class="cafeAdmisiones">
					<div class="imgCafe">
						<img src="../img/logo-cafeAdmisiones.png" alt="">
					</div>
					<div class="descriptionCafeModal">
						<p>Durante este encuentro te presentaremos nuestra metodología, así conocerás cómo llevamos a cabo la labor de educar a nuestros estudiantes. También te explicaremos las dinámicas de nuestro querido Colegio Jefferson y del proceso de admisión.

						Además, daremos un recorrido por las instalaciones, por lo que te pedimos asistir en ropa y zapatos cómodos.</p>

						<p class="lineP">
						Todos los viernes de 8 a 10 am</p>
						<p class="lineP"><span>Inscríbete ya y separa tu viernes</span></p>
						<p class="lineP">
						Email: asismercadeo@jefferson.edu.co
						</p>
						<p class="lineP">PBX 6582700 ext 111</p>
						<p><span class="titleCafe">!Te Esperamos!</span></p>
					
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<script>
		let cafeAdmisiones = document.getElementById('cafeAdmisiones');
		let modal = document.getElementById('modal');
		let closeModal = document.getElementById('closeModal');
		let contModal = document.getElementById('contModal');

		cafeAdmisiones.onclick = ()=>{

			modal.classList.add("visible");
			contModal.classList.add("fadeUp");
		}


		closeModal.onclick = () =>{
			modal.classList.remove("visible");
		}
	</script>


</body>
</html>