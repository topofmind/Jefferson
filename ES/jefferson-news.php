<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Jefferson News</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<img src="../img/bannerAdmission.jpg" alt="">
			<div class="titleBannerSection">
				<h1>Jefferson News</h1>
			</div>
		</div>

		
		
		<section class="infoSeccion jNews">

			<div class="boxnoticia largeHeight">
				<a href="">
					<div class="headerNews">
						<h2>XXVII ENCUENTRO DE UNVERCIDADES ASOBILCA</h2>
					</div>
					<img src="../img/ImgNotiEgresados1.jpg" alt="">
					<div class="introText">
						<p>El Encuentro de Universidades es un programa pedagógico de la Asociación de Colegios Bilingües de Cali (ASOBILCA), organizado y liderado cada dos años por una de las Instituciones Educativas miembro de esta asociación.</p>
					</div>
					<div class="dateNews">
						<h3>Febrero 2</h3>
					</div>
				</a>
			</div>

			<div class="boxnoticia largeHeight">
				<a href="">
					<div class="headerNews">
						<h2>XXVII ENCUENTRO DE UNVERCIDADES ASOBILCA</h2>
					</div>
					<img src="../img/ImgNotiEgresados1.jpg" alt="">
					<div class="introText">
						<p>El Encuentro de Universidades es un programa pedagógico de la Asociación de Colegios Bilingües de Cali (ASOBILCA), organizado y liderado cada dos años por una de las Instituciones Educativas miembro de esta asociación.</p>
					</div>
					<div class="dateNews">
						<h3>Febrero 2</h3>
					</div>
				</a>
			</div>

			<div class="boxnoticia largeHeight">
				<a href="">
					<div class="headerNews">
						<h2>XXVII ENCUENTRO DE UNVERCIDADES ASOBILCA</h2>
					</div>
					<img src="../img/ImgNotiEgresados1.jpg" alt="">
					<div class="introText">
						<p>El Encuentro de Universidades es un programa pedagógico de la Asociación de Colegios Bilingües de Cali (ASOBILCA), organizado y liderado cada dos años por una de las Instituciones Educativas miembro de esta asociación.</p>
					</div>
					<div class="dateNews">
						<h3>Febrero 2</h3>
					</div>
				</a>
			</div>

		</section>


		<?php include_once 'footer.php' ?>

	</div>
	<script>
		let boxsDrops = document.getElementsByClassName('contBoxDrop');
		let isDrop = false

		for(const index in boxsDrops){

			boxsDrops[index].onclick = function(){
				
				isDrop = !isDrop;

				if (isDrop) {
					this.children[1].classList.remove("up");
					this.children[1].classList.add("down");
				}else{
					this.children[1].classList.add("up");
					this.children[1].classList.remove("down");

				}
			}
		}
	</script>
</body>
</html>