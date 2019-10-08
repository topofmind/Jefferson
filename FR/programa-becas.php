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
					<h2>Programa de becas</h2>
					<div class="collageTextImg reverse">
						<div class="collageImg">
							<img src="../img/img-becas.jpg" alt="">
						</div>
						<div class="text">
							<h2 class="collageH2">Programa de becas</h2>
							<p>La Consejería de estudios acompaña a nuestros estudiantes y da a conocer las alternativas que tienen para aplicar a becas tanto nacionales como internacionales. El acompañamiento va desde la propuesta de opciones hasta la ayuda en la aplicación. Con esta guía nuestros jóvenes tienen un panorama claro del abanico de posibilidades y lo que deben hacer para alcanzar sus metas.</p>

							<p>Nuestro Colegio tiene convenios con universidades como ICESI, Rosario, Javeriana, TEC de Monterrey, Autónoma de Occidente y Universidad de la Sabana para becas, validación de crédito y admisión preferencial. </p>
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