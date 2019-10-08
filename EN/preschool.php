<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Preprimary</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
<div class="contBox">

<?php include_once 'menu.php' ?>

<div class="titleIzq">
	<h1>PREPRIMARY</h1>
</div>

<div class="titleSecondary">
	<h2>Educational Project</h2>
</div>

<section class="infoSeccion">
	<div class="description">
		<p class="HS"><span class="firstLeter">A</span>place to grow, enjoy and learn about myself through building new relations and constructing knowledge.</p>

		<p>
			<b class="prKndr">Kinder, Transition & First Grade</b> <br> 
		</p>

		<p>	
			Preprimary Section at Colegio Jefferson is the place where our students begin their school life, experiencing many and diverse adventures. During these three years, they learn how to interact with their classmates and teachers, manage to express their ideas, listen to others' opinions and establish agreements. They begin to strengthen their autonomy by realizing what they do, establish commitments and respond to their actions and materials. They also consolidate their independence by recognizing their possibilities and validating others' opinions. 

		</p>

		<p> 
			We conceive our students as key actors of their growth and learning processes. We promote this through pedagogical proposals, where good literature in both languages ​​allows them to marvel at the stories. With a playful proposal, they make spaces to play, create and imagine. They explore, observe and ask about the changes in their environment, as they consolidate knowledge in different areas, while achieving their immersion in the second language with tranquility.</p>

		<p>
			The whole proposal is focused on promoting in our children skills that allow them to build different ways of thinking, find solutions to problems and appropriate different ways of working. Communication is the central axis of agreements, they are given space where they strengthen their abilities to meet the demands that their adult life will propose. This way, they can live in a world with social responsibility and global awareness.</p>
		<p>
			<span><b>Ages:</b></span> <br>
			We welcome kids in Preschool at the age of 4 by July the 31st. In Transition, kid’s ages range between 5 and 6, and in First Grade between 6 and 7.
		</p>

		<p>
			<span><b>School Schedule:</b></span> <br>
			Regular routine: 7:15 a.m. to 12:15 pm.<br> 
			PAC (Extracurricular Activities): 12:30 p.m. to 2:30 p.m.
		</p>

		<p class="smallText">*During PAC time, our kids are accompanied by their teachers to have lunch. Students have the chance to eat from our cafeteria or bring a homemade meal.	</p>

		<button id="listMaterial"><i class="fas fa-th-list"></i>School Supplies</button>
	
	</div>
	<div class="imgSeccion"></div>
</section>
<section class="utilitiesSeccion">
	<div class="gleriaFotosSeccion">
		<div class="titleHorzntal">
			<div></div>
				<h2>PHOTO GALLERY</h2>
			<div></div>
		</div>
			<div class="contImgGalery">
				<div class="contImgGalery">
						<div class="imgGalery">
					<img class="imageG" src="../img/galery-preschool-5.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="../img/galery-preschool-3.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="../img/galery-preschool-2.jpg" alt="">
				</div>
				<div class="imgGalery">
					<img class="imageG" src="../img/galery-preschool-4.jpg" alt="">
				</div>
				<div class="imgGalery ">
					<img class="imageG" src="../img/galery-preschool-1.jpg" alt="">
				</div>
				<div class="imgGalery">
					<img class="imageG" src="../img/galery-preschool-6.jpg" alt="">
				</div>
				<div class="imgGalery">
					<img class="imageG" src="../img/galery-preschool-8.jpg" alt="">
				</div>
				<div class="imgGalery">
					<img class="imageG" src="../img/galery-preschool-9.jpg" alt="">
				</div>
				
			</div>
	</div>
</section>

<article class="submenusN pedagogicoSecciones">
	<!-- <a href="preschool.php" class="menuN1">Preschool</a> -->
	<a href="primary.php" class="menuN2">Primary</a>
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
					<a href="../archives/kinder.pdf">
						<div class="itemUtil">

							Kinder
						</div>
					</a>
					<a href="../archives/transicion.pdf">
						<div class="itemUtil">

							Transition
						</div>
					</a>
				</div>
				<div class="contItemUtil">
					<a href="../archives/primero.pdf">
					<div class="itemUtil">
						First grade
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
let contModal = document.getElementById('contModal');

let closeModalGalery = document.getElementById('closeModalGalery');
let modalGalery = document.getElementById('modalGalery');
let contModalGalery = document.getElementById('contModalGalery');
let imageGalery = document.getElementsByClassName('imageG');
let imgContainer = document.getElementById('imgContainer');


function interactiveModal(btn,modal,closeModal,contModal){

btn.onclick = ()=>{

		modal.classList.add("visible");
		contModal.classList.add("fadeUp");
	}


closeModal.onclick = () =>{
	modal.classList.remove("visible");
}

}

interactiveModal(btnListMaterials,modal,closeModal,contModal);

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