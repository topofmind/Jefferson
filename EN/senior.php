<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Senior</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>SENIOR</h1>
		</div>

		<div class="titleSecondary">
			<h2>Educational Project</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<h4 class="numGrados">11° a 12°</h4>
				<p class="HS"><span class="firstLeter">W</span>e take responsibility of our own decisions.</p>

				<p>
					The formative work carried out with our Jefferson students during the course of their journey at school, allows them to achieve a meaningful growth which is reflected in Senior, not only in academic and intellectual terms, but also on an emotional and personal level.   
				</p>

				<p>Therefore, something that becomes evident in our Senior students is their capacity to show a positive leadership, not only through their academic work in relation to the different projects they carry out in real contexts and everyday situations, but also as they coexist with all their School peers. This way students’ process along the School becomes more meaningful as they gain awareness of their achievements and challenges and are able to acknowledge the importance of their legacy for future generations.</p>

				<p>
					<span><b>School Schedule:</b></span> <br>
					Regular routine: 7:15 am to 2:30 pm. <br>
					PAC (Extracurricular Activities): 2:45 pm to 4:00 pm.
				</p>

				<p class="smallText">*Students have the chance to eat from our cafeteria or bring a homemade meal.</p>
				
				<button id="listMaterial"><i class="fas fa-th-list"></i>School Supplies</button>
			</div>
			<div class="imgSeccion senior"></div>
		</section>
		<section class="utilitiesSeccion">
	
			<div class="gleriaFotosSeccion">
				<div class="titleHorzntal">
					<div></div>
						<h2>PHOTO GALLERY</h2>
					<div></div>
				</div>
				<div class="contImgGalery">
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-senior-1.jpg" alt="">
						</div>
						<div class="imgGalery ">
							<img class="imageG" src="../img/galery-senior-2.jpg" alt="">
						</div>
						<div class="imgGalery ">
							<img class="imageG" src="../img/galery-senior-3.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-senior-4.jpg" alt="">
						</div>
						<div class="imgGalery ">
							<img class="imageG" src="../img/galery-senior-5.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-senior-6.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-senior-7.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-senior-8.jpg" alt="">
						</div>
					</div>
			</div>
		</section>

		<article class="submenusN pedagogicoSecciones">
			<a href="preschool.php" class="menuN1">Preprimary</a>
			<a href="primary.php" class="menuN2">Primary</a>
			<a href="junior.php" class="menuN3">Junior</a>
			<!-- <a href="senior.php" class="menuN4">Senior</a> -->
			<a href="pac.php" class="menuN5">Extracurricular Activities</a>
		</article>

		<?php include_once 'footer.php' ?>

	</div>

	<div class="modal" id="modal">
		<div class="contVideoRModal pac huerta" id="contModal">
			<i class="fas fa-times-circle" id="closeModal"></i>
			<div class="modalcontPac">
				
				<div class="utilesEsclres">
					<div class="titleHorzntal">
						<div></div>
							<h2>SCHOOL SUPPLIES</h2>
						<div></div>
					</div>
					<div class="contItemUtil">
					<a href="../archives/once.pdf">
						<div class="itemUtil">
							
							Eleventh grade
						</div>
					</a>
				</div>
				<div class="contItemUtil">
					<a href="../archives/doce.pdf">
					<div class="itemUtil">
						
							Twelfth grade
					</div>
					</a>
				</div>
				</div>
			</div>
		</div>
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

let btnListMaterials = document.getElementById('listMaterial');
let closeModal = document.getElementById('closeModal');
let modal = document.getElementById('modal');
let contModal1 = document.getElementById('contModal');

let closeModalGalery = document.getElementById('closeModalGalery');
	let modalGalery = document.getElementById('modalGalery');
	let contModalGalery = document.getElementById('contModalGalery');
	let imageGalery = document.getElementsByClassName('imageG');
	let imgContainer = document.getElementById('imgContainer')


function interactiveModal(btn,modal,closeModal,contModal){

	btn.onclick = ()=>{

			modal.classList.add("visible");
			contModal.classList.add("fadeUp");
		}


	closeModal.onclick = () =>{
		modal.classList.remove("visible");
	}

}

interactiveModal(btnListMaterials,modal,closeModal,contModal)

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