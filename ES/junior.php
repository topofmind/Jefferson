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
			<h2>Proyecto Pedagógico</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<h4 class="numGrados">7° a 10°</h4>
				<p class="HS"><span class="firstLeter">E</span>spacio para la formación ciudadana.</p>

				<p>
					Las propuestas pedagógicas de cada nivel, permiten fortalecer la relación que se construye alrededor del conocimiento entre el maestro y los estudiantes, al igual que con los proyectos interdisciplinarios. De esta manera, se posibilitan transformaciones importantes en su proceso como estudiantes y sujetos creativos, reflexivos, argumentativos y propósitivos.   
				</p>

				<p>Cada año, nuestras evaluaciones revelan logros importantes y significativos desde las experiencias académicas y la convivencia. Esto permite crear conciencia sobre la importancia del cuidado de cada uno y sus pares, permitiendo así que el bien común prevalezca sobre el particular.</p>

				<p>
					<span><b>Horario:</b></span> <br>
					Jornada curricular: 7:15 am a 2:30 pm. <br>
					PAC (Actividades Complementarias): 2:45 pm a 4:00 pm.
				</p>
				
				<button id="listMaterial"><i class="fas fa-th-list"></i>Lista de Materiales</button>

			</div>
			<div class="imgSeccion junior"></div>
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
			<a href="preschool.php" class="menuN1">Preprimaria</a>
			<a href="primary.php" class="menuN2">Primaria</a>
			<!-- <a href="junior.php" class="menuN3">Junior</a> -->
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
					<a href="../archives/septimo.pdf">
						<div class="itemUtil">
							
							Séptimo
						</div>
					</a>
					<a href="../archives/octavo.pdf">
						<div class="itemUtil">
							
							Octavo
						</div>
					</a>
					<a href="../archives/noveno.pdf">
					<div class="itemUtil">
						
						Noveno
					</div>
					</a>
				</div>
				<div class="contItemUtil">
					<a href="../archives/decimo.pdf">
					<div class="itemUtil">
						
						Décimo
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