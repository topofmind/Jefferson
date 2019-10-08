<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Preschool</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>PREESCOLAR</h1>
		</div>

		<div class="titleSecondary">
			<h2>Proyecto Pedagógico</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<p class="HS"><span class="firstLeter">E</span>space de développement personnelle pour découvrir ses propres possibilités, reconnaître les autres et construire de nouvelles connaissances.</p>

				<p>
					<b class="prKndr">Prekinder:</b> <br> 
					Dès le premier niveau, les élèves commencent leur immersion dans la deuxième langue, l’anglais. 
				</p>
				<p>	
					Nos enfants commencent à consolider leur indépendance, en se reconnaissant et en reconnaissant l’autre dans son potentiel. L’école maternelle du Jefferson est l’espace pour se constituer en groupe et explorer les merveilles du grand collège. Nous proposons à nos étudiants d’être les protagonistes de leur processus d’apprentissage, et ainsi, ils construisent des connaissances à travers les jeux et les métaphores traités dans la section, ils aiment la littérature que nous leur offrons et aboutissent à leur immersion dans la deuxième langue avec beaucoup de tranquillité et de naturel.
  
				</p>

				<p><b class="kndr">Kinder:</b> <br> 
					Nos enfants continuent à grandir dans la façon de communiquer avec leurs camarades et leurs enseignants, parviennent à exprimer leurs idées, à écouter les opinions des autres et à établir des accords avec eux. Ils commencent à renforcer leur autonomie en rendant compte de ce qu’ils font, en prenant des engagements et en répondant de leurs actions et des matériels. Ils construisent des apprentissages propres du grand collège au deuxième niveau et ils continuent à s’émerveiller des récits des textes proposés. Ils explorent aussi leur environnement, reconnaissent les différents lieux du Collège et parviennent à se déplacer d’un endroit à un autre en tenant compte des règles pour leurs soins personnels.</p>

				<p><b class="trncson">Transición:</b> <br>
					Les enfants comprennent et utilisent la deuxième langue à différents moments de l’apprentissage, à partir de différentes situations et de textes proposés. En plus, ils progressent dans le processus de lecture et d’écriture en espagnol et en anglais.</p>

				<p>
					<span><b>Horaire</b></span> <br>
					Journée d’enseignement : de 7h30 à 12h30 <br> 
					PAC (Programme d’Activités complémentaires) : de 12h30 à 14h30.*
				</p>

				<p class="smallText">*Pour le PAC, nos enfants disposent d’un lieu et de l’accompagnement pendant leur déjeuner, qui peut être leur goûter ou le déjeuner à la cafétéria.</p>

				<!-- <button id="listMaterial"><i class="fas fa-th-list"></i>Lista de Materiales</button> -->
			
			</div>
			<div class="imgSeccion"></div>
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
		</section>

		<article class="submenusN pedagogicoSecciones">
			<!-- <a href="preschool.php" class="menuN1">Preescolar</a> -->
			<a href="primary.php" class="menuN2">Primaria</a>
			<a href="junior.php" class="menuN3">Junior</a>
			<a href="senior.php" class="menuN4">Senior</a>
			<a href="pac.php" class="menuN5">Actividades Complementarias</a>
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
								<h2>LISTA DE MATERIALES</h2>
							<div></div>
						</div>
						<div class="contItemUtil">
							<a href="../archives/Pre-Kinder.pdf">
								<div class="itemUtil">

									Pre-Kínder
								</div>
							</a>
							<a href="../archives/Kinder.pdf">
								<div class="itemUtil">

									Kínder
								</div>
							</a>
						</div>
						<div class="contItemUtil">
							<a href="../archives/Transicion.pdf">
							<div class="itemUtil">
								Transición
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