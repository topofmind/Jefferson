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
			<h2>Proyecto Pedagógico</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<h4 class="numGrados">11° a 12°</h4>
				<p class="HS"><span class="firstLeter">A</span>sumimos responsablemente nuestras propias decisiones.</p>

				<p>
					El trabajo formativo que realizamos con nuestros estudiantes Jefferson durante su viaje en el Colegio les permite crecer como sujetos de manera significativa lo cual se puede ver reflejado en Senior, no solo desde los aspectos académicos ni intelectuales, sino a nivel emocional y personal.   
				</p>

				<p>Por esta razón, lo que es evidente en nuestros estudiantes de Senior es su capacidad de mostrar liderazgo positivo, tanto en su trabajo académico relacionado con los diferentes proyectos que ellos realizan desde situaciones reales, como en la convivencia con sus compañeros de Senior. De esta manera, el proceso de los estudiantes se carga de significado en la medida que ellos ganan conciencia sobre sus logros y retos, siendo capaces de reconocer la importancia de su legado para futuras generaciones.</p>

				<p>
					<span><b>Horario:</b></span> <br>
					Jornada curricular: 7:15 am a 2:30 pm. <br>
					PAC (Actividades Complementarias): 2:45 pm a 4:00 pm.
				</p>
				
				<button id="listMaterial"><i class="fas fa-th-list"></i>Lista de Materiales</button>

			</div>
			<div class="imgSeccion senior"></div>
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
			<a href="preschool.php" class="menuN1">Preprimaria</a>
			<a href="primary.php" class="menuN2">Primaria</a>
			<a href="junior.php" class="menuN3">Junior</a>
			<!-- <a href="senior.php" class="menuN4">Senior</a> -->
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
					<a href="../archives/once.pdf">
						<div class="itemUtil">
							
							Once
						</div>
					</a>
				</div>
				<div class="contItemUtil">
					<a href="../archives/doce.pdf">
					<div class="itemUtil">
						
							Doce
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