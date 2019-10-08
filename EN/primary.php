<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Primary</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>PRIMARY</h1>
		</div>

		<div class="titleSecondary">
			<h2>Educational Project</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<h4 class="numGrados">2° a 6°</h4>
				<p class="HS"><span class="firstLeter">A</span> place to build a sense of belonging to different social groups.</p>

				<p>
					We pursue a profound common goal: to redefine the purpose of teaching, to be committed to the very true essence of educating children; nourishing new possibilities that allow them to build a better world and encourage them to believe and to dream!.  
				</p>

				<p>A more humane education will allow each one of us to understand the value of our differences and the need for a better coexistence. Though this concept of education might seem unrealistic and utopian, it is the only one, for there is no other way out. Hope, ethics, creativity, sensibility are all wrapped up in the beautiful magic of words. Every day, we cast the spell on our classrooms for great books are always willing to share with us their wisdom.</p>
				<p>We are certain that the more exposed our students are to magnificent poetry and texts, the better their possibilities will be to build a broader comprehension of the world they are perceiving every shining morning and every singing night.</p>

				<p>
					<span><b>School Schedule:</b></span> <br>
					Regular routine: 7:15 am to 2:30 pm<br> 
					PAC (Extracurricular Activities): 2:45 pm a 4:00 pm.
				</p>

				<p class="smallText">*Our kids are accompanied by their teachers to have lunch. Students have the chance to eat from our cafeteria or bring a homemade meal.</p>

				<button id="listMaterial"><i class="fas fa-th-list"></i>School Supplies</button>

			</div>
			<div class="imgSeccion primary"></div>
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
							<img class="imageG" src="../img/galery-primaria-1.jpg" alt="">
						</div>
						<div class="imgGalery ">
							<img class="imageG" src="../img/galery-primaria-2.jpg" alt="">
						</div>
						<div class="imgGalery ">
							<img class="imageG" src="../img/galery-primaria-3.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-primaria-4.jpg" alt="">
						</div>
						<div class="imgGalery ">
							<img class="imageG" src="../img/galery-primaria-5.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-primaria-6.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-primaria-7.jpg" alt="">
						</div>
						<div class="imgGalery">
							<img class="imageG" src="../img/galery-primaria-8.jpg" alt="">
						</div>
					</div>
			</div>
		</section>

		<article class="submenusN pedagogicoSecciones">
			<a href="preschool.php" class="menuN1">Preprimary</a>
			<!-- <a href="primary.php" class="menuN2">Primary</a> -->
			<a href="junior.php" class="menuN3">Junior</a>
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
						<a href="../archives/SEGUNDO.pdf">
							<div class="itemUtil">
								
								Second Grade
							</div>
						</a>
						<a href="../archives/TERCERO.pdf">
							<div class="itemUtil">
								
								Third Grade
							</div>
						</a>
						<a href="../archives/CUARTO.pdf">
						<div class="itemUtil">
							
							Fourth Grade
						</div>
						</a>
					</div>
					<div class="contItemUtil">
						<a href="../archives/QUINTO.pdf">
						<div class="itemUtil">
							
							Fifth Grade
						</div>
						</a>
						<a href="../archives/SEXTO.pdf">
							<div class="itemUtil">
								
								Sixth Grade
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