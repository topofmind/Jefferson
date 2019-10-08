<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | College Placement</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections collage">
			<div class="titleBannerSection simple collage">
				<h1>College Placement</h1>
			</div>
        </div>
		
		<div class="nosotros collegeContainer">
			
			<div class="infoCollege">
				<p>Al llegar a bachillerato los jóvenes, al igual que sus padres, se enfrentan al momento de tomar decisiones que marcarán su proyecto de vida. Conscientes de la magnitud de estas decisiones, el Colegio ofrece la asesoría de un College Placement Counselor, una persona especializada en temas como exploración y orientación vocacional, ubicación en universidades, aplicación a becas, pruebas internacionales, campos de veranos e intercambios.</p>
			</div>


			<div class="collageLayout">

				<?php include_once 'menuCollegePlacement.php' ?>
				<section class="contNosotros">
					<h2>Experiencia de inmersiónl</h2>
					<div class="collageTextImg reverse">
						<div class="collageImg">
							<img src="../img/img-inmersion.jpg" alt="">
						</div>
						<div class="text">
							<h2 class="collageH2">Experiencia de inmersión</h2>
							<p>Durante nivel Noveno, para reforzar su aprendizaje en las lenguas, nuestros estudiantes tienen la posibilidad de realizar una experiencia durante seis meses en Estados Unidos, Canadá o Francia. A través de esta experiencia nuestros estudiantes pueden vivir de primera mano la cultura y el idioma, mientras refuerzan su autonomía y aprendizajes por fuera del aula.</p>
							
							<p>Adicionalmente, la consejera asesora a nuestros estudiantes en la búsqueda de campamentos de verano artísticos, deportivos y académicos. De esta forma, nuestros jóvenes pueden explorar y escoger el programa que más se adapte a sus necesidades y gustos. </p>
						</div>
					</div>
					
				</section>
				
			</div>	

		</div>


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
						<p class="lineP"><span>Inscribete ya y separa tu viernes</span></p>
						<p class="lineP">
						Email: asismercadeo@jefferdon.edu.co
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
		let fabRapidos = document.getElementById('fabRapidos'); 
		let boxrapidos = document.getElementById('boxrapidos');
		let bgRapidos = document.getElementById('bgRapidos');
		let egresados = document.getElementById('egresados');

		let totalScroll = egresados.offsetTop + egresados.offsetHeight+ (document.querySelector('.relleno').offsetHeight);

		fabRapidos.style.top = (totalScroll-20)+'px';

		console.log(totalScroll)
		

		let isBox = false;

		fabRapidos.onclick = function(){

			boxrapidos.className = 'boxrapidos In';
			bgRapidos.className = 'bgRapidos in';
			document.body.style.overflow = "hidden";
		}

		bgRapidos.onclick = function(){
			boxrapidos.className = 'boxrapidos Out';
			bgRapidos.className = 'bgRapidos out';
			document.body.style.overflow = "auto";	
		}

		document.body.onscroll=function(){

			let y = document.documentElement.scrollTop

			if (y >= (totalScroll-75)) {
				fabRapidos.style.top = '65px';
				fabRapidos.style.position = 'fixed';
				
			}else{
				fabRapidos.style.position = 'absolute';
				fabRapidos.style.top = (totalScroll-20)+'px';
			}
			console.log()
		}


	</script>


</body>
</html>