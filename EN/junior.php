<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Junior</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>JUNIOR</h1>
		</div>

		<div class="titleSecondary">
			<h2>Educational Project</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<h4 class="numGrados">7° a 10°</h4>
				<p class="HS"><span class="firstLeter">A</span> space for citizenship building.</p>

				<p>
					Our pedagogical proposals at each level, respond to strengthening teacher-students-knowledge relationship and also establishing connections with the different 
					interdisciplinary projects, thus fostering important transformations in their formation process as creative, reflexive, argumentative and propositive students and individuals.   
				</p>

				<p>Each year, our evaluations reveal important and meaningful achievements in terms of academic experiences and with students’ coexistence, rising on them awareness of the importance of taking care of themselves and their peers, so the common wellbeing prevails over their individual benefit.</p>

				<p>
					<span><b>School Schedule:</b></span> <br>
					Regular routine: 7:15 am to 2:30 pm. <br>
					PAC (Extracurricular Activities): 2:45 pm. to 4:00 pm.
				</p>

				<p class="smallText">*Students have the chance to eat from our cafeteria or bring a homemade meal.</p>

				<button id="listMaterial"><i class="fas fa-th-list"></i>School Supplies</button>
			</div>
			<div class="imgSeccion junior"></div>
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
							<img class="imageG" src="../img/gallery-junior-1.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-junior-2.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-junior-3.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-junior-4.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-junior-5.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-junior-6.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/gallery-junior-7.jpg" alt="">
						</div>
					</div>
			</div>
		</section>

		<article class="submenusN pedagogicoSecciones">
			<a href="preschool.php" class="menuN1">Preprimary</a>
			<a href="primary.php" class="menuN2">Primary</a>
			<!-- <a href="junior.php" class="menuN3">Junior</a> -->
			<a href="senior.php" class="menuN4">Senior</a>
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
						<a href="../archives/septimo.pdf">
							<div class="itemUtil">
								
								Seventh grade
							</div>
						</a>
						<a href="../archives/octavo.pdf">
							<div class="itemUtil">
								
								Eighth grade
							</div>
						</a>
						<a href="../archives/noveno.pdf">
							<div class="itemUtil">
								
								Ninth grade
							</div>
						</a>
					</div>
					<div class="contItemUtil">
						<a href="../archives/decimo.pdf">
							<div class="itemUtil">
								
								Tenth grade
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