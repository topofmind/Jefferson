<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Primaria</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>Primaire</h1>
		</div>

		<div class="titleSecondary">
			<h2>Proyecto Pedagógico</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<p class="HS"><span class="firstLeter">U</span>n espace pour signifier l’appartenance à différents groupes sociaux.</p>

				<p>
					Nous poursuivons un objectif commun : redéfinir le but de l’enseignement en nous engageant à enseigner à nos enfants ; permettant de nouvelles possibilités de leur donner des outils pour construire un monde nouveau et les incitant à croire et à rêver.
				</p>

				<p>Une éducation plus humaine nous permettra de comprendre la valeur de nos différences et la nécessité d’une meilleure coexistence. Bien que ce concept d’éducation puisse sembler irréaliste et utopique, il est en fait le seul car il n’y a pas d’autre solution. L’espoir, l’éthique, la créativité et la sensibilité sont des mots chargés de magie. Chaque jour, nous lançons des sorts dans nos salles de classes pour que les livres soient toujours prêts à partager avec nous leur sagesse.</p>

				<p>Nous sommes convaincus que plus nos étudiants sont exposés à la beauté de la poésie et d’autres textes, meilleures seront leurs possibilités de construire la connaissance du monde qu’ils perçoivent chaque jour.</p>
				
				<p>
					<span><b>Horario</b></span> <br>
					Journée d’enseignement : 7h30  à 2h30.<br> 
					PAC (Programme d’Activités complémentaires) : de  2h40  à 4h30.
				</p>

				<!-- <button id="listMaterial"><i class="fas fa-th-list"></i>Lista de Materiales</button> -->

			</div>
			<div class="imgSeccion primary"></div>
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
			<a href="preschool.php" class="menuN1">Preescolar</a>
			<!-- <a href="primaria.php" class="menuN2">Primaria</a> -->
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
					<a href="../archives/PRIMERO.pdf">
						<div class="itemUtil">
		
							Primero
						</div>
					</a>
					<a href="../archives/SEGUNDO.pdf">
						<div class="itemUtil">
		
							Segundo
						</div>
					</a>
					<a href="../archives/TERCERO.pdf">
						<div class="itemUtil">
		
							Tercero
						</div>
					</a>
				</div>
				<div class="contItemUtil">
					<a href="../archives/CUARTO.pdf">
					<div class="itemUtil">
	
						Cuarto
					</div>
					</a>
					<a href="../archives/QUINTO.pdf">
					<div class="itemUtil">
	
						Quinto
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