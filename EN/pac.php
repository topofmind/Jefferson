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
		
				<p><span class="firstLeter">E</span>xtracurricular activities held at Colegio Jefferson are the perfect match to our pedagogical proposal! By practicing arts or sports our kids achieve a well-rounded education.</p>
	
				<p>Activities are selected voluntarily and practiced at our school campus. PAC is closely related to our curricular activities, this way our kids can develop ambitious projects like sports and cultural exchanges.</p>
	
				<p>PAC teaches our kids specific art and sports techniques, but above all ethics, and social values. These lifelong principles are present through respect, dedication, honesty, loyalty, responsibility and commitment to achieve success in life.</p>

				<a href="../archives/BROCHURE-PAC.pdf" class="btnPac" target="_blank">
				<i class="fas fa-map"></i>
				Ver Brochure
				</a>
			</div>
	
			
		</div>	


			<div class="pacCol2">
				<div id="areaDeportiva">
					<img src="../img/areaDeportiva.jpg" alt="">
					<h3>SPORTS</h3>
					<p>Sports are a highly stimulating mechanism for student's cognitive development. It involves brain functions such as concentration and memory. In addition, mechanisms that involve neuronal interconnection are activated, which translates into a greater capacity for learning and, therefore, a better school performance.</p>

					<p>Children and teenagers who participate in sports activities also learn to assume roles, respect rules, self-regulate and promote healthy habits. It also allows them to connect to their environment.</p>

					<p>Sports PAC offers students: Physical Skills, Soccer, Basketball, Volleyball, Tennis, Table Tennis, Functional Training, Cheerleading, Swimming, Judo, Diving, Artistic Gymnastics and Skating.</p>
				</div>
				<div id="areaArtistica">
					<img src="../img/areaArtistica.jpg" alt="">
					<h3>ART</h3>
					<p>Art is known as a cultural practice for expression and creativity which develops visual, auditory, verbal, corporal and kinesthetic languages in a  meaningful way in order to enrich human integral education.</p>

					<p>Furthermore, students are given the opportunity to represent and create the world, life and their dreams. They also express themselves in diferent languages ​​which transforms them, giving meaning to human existence.</p>

					<p>Art PAC offers students: Plastic Arts, Gastronomy, Drama, Visual Narratives, Dance, Music, Violin Lessons and Robotics.</p>

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

		</section>

		<article class="submenusN pedagogicoSecciones">
			<a href="preschool.php" class="menuN1">Preschool</a>
			<a href="primary.php" class="menuN2">Primary</a>
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