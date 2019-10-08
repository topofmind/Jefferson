<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | PAC</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>PAC</h1>
		</div>
		
		<section class="contPAC">

		<h2>Programa de Actividades Complementarias</h2>

		<div class="contPACIntro">

			<div class="VideoYoutube">
				<iframe src="https://www.youtube.com/embed/WHXLWGhtE6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			
			<div class="introText">
		
				<p><span class="firstLeter">E</span>s la dependencia que le da apoyo a la formación académica a través del aprendizaje y práctica de actividades deportivas y artísticas, elementales en el desarrollo integral del ser.</p>
	
				<p>Estas actividades las escogen voluntariamente los estudiantes y se practican en el horario extracurricular establecido. Una vez en la actividad, nuestros estudiantes son quienes asumen autónomamente su práctica, aportando así a su proceso formativo. Las actividades realizadas en el PAC están estrechamente relacionadas con las actividades curriculares, por lo que permite articular propuestas en conjunto y llevar a cabo proyectos ambiciosos como intercambios culturales.</p>
	
				<p>El PAC le permite a nuestros niños y jóvenes trabajar la enseñanza de las técnicas específicas del arte y el deporte, los valores éticos, sociales y morales evidenciados a través del respeto, la honestidad, la lealtad, la responsabilidad, la valoración del esfuerzo y la constancia en el trabajo como medio para alcanzar el éxito en la vida</p>

				<a href="../archives/BROCHURE-PAC.pdf" class="btnPac" target="_blank">
				<i class="fas fa-map"></i>
				Ver Brochure
				</a>
			</div>
	
			
		</div>	


			<div class="pacCol2">
				<div id="areaDeportiva">
					<img src="../img/areaDeportiva.jpg" alt="">
					<h3>ÁREA DEPORTIVA</h3>
					<p>El deporte es un mecanismo altamente estimulante para el desarrollo cognitivo del estudiante, pues su práctica involucra funciones cerebrales como concentración y memoria. Además se activan mecanismos que favorecen la interconexión neuronal, lo que se traduce en una mayor capacidad de aprendizaje y, por ende, en un mejor rendimiento escolar.</p>
					<p>Los niños y jóvenes que participan en actividades deportivas también aprenden a asumir roles, respetar reglas, autorregularse y potencian hábitos saludables, además, les permite relacionarse mejor con su entorno.</p>
					<p>El área deportiva le ofrece a sus estudiantes prácticas en: habilidades y destrezas, football, basketball, voleyball, tenis de campo, tenis de mesa, entrenamiento funcional, porrismo, natación, judo, buceo, gimnasia artística y patinaje.</p>
				</div>
				<div id="areaArtistica">
					<img src="../img/areaArtistica.jpg" alt="">
					<h3>ÁREA ARTÍSTICA</h3>
					<p>El arte se entiende como una práctica cultural de expresión y creación que desarrolla distintos lenguajes como el visual, auditivo, verbal, corporal y kinestésico, con sentido y significado para enriquecer la formación integral humana.</p>
					<p>En este sentido, se les da la posibilidad a nuestros estudiantes de representar y crear el mundo, la vida y los sueños. Además, expresar en múltiples lenguajes y conmover distintos sentidos para dar significado a la existencia humana.</p>
					<p>El área artística ofrece a sus estudiantes clases en: artes plásticas, manuales, gastronómicas, drama, narrativas visuales, danza, formación musical, violín y robótica.</p>

					
				</div>
			</div>	

		</section>

		<section class="utilitiesSeccion">
			<div class="gleriaFotosSeccion">
				<div class="titleHorzntal">
					<div></div>
						<h2>GALERÍA DE FOTOS</h2>
					<div></div>
				</div>
					<div class="contImgGalery">
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-1.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-2.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-3.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-4.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-5.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-6.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-pac-7.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>

		<article class="submenusN pedagogicoSecciones">
			<a href="preschool.php" class="menuN1">Preescolar</a>
			<a href="primary.php" class="menuN2">Primaria</a>
			<a href="junior.php" class="menuN3">Junior</a>
			<a href="senior.php" class="menuN4">Senior</a>
			<!-- <a href="pac.php" class="menuN5">Actividades Complementarias</a> -->
		</article>


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
	let imgContainer = document.getElementById('imgContainer')

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