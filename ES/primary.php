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
			<h1>PRIMARIA</h1>
		</div>

		<div class="titleSecondary">
			<h2>Proyecto Pedagógico</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">
				<h4 class="numGrados">2° a 6°</h4>
				<p class="HS"><span class="firstLeter">E</span>spacio para significar la pertenencia a diferentes grupos sociales.</p>

				<p>
					Nosotros seguimos un objetivo común: redefinir el propósito de la enseñanza, comprometiéndonos con la verdadera esencia de enseñar a nuestros niños; permitiendo nuevas posibilidades que les de herramientas para construir un mundo nuevo y motivándolos a creer y a soñar.  
				</p>

				<p>Una educación más humana nos permitirá entender el valor de nuestras diferencias y la necesidad de una mejor convivencia. Si bien este concepto de educación puede parecer irrealista y utópico, es en realidad el único ya que no hay otra manera. Esperanza, ética, creatividad y sensibilidad son palabras cargadas de magia. Cada día, lanzamos hechizos en nuestros salones por que los libros siempre están dispuestos a compartir con nosotros su sabiduría.</p>

				<p>Estamos convencidos que cuan más expuestos están nuestros estudiantes a la belleza de la poesía y otros textos, mejores serán sus posibilidades para construir conocimiento del mundo que ellos perciben cada día.</p>
				
				<p>
					<span><b>Horario</b></span> <br>
					Jornada curricular: 7:15 am a 2:30 pm.<br> 
					PAC (Programa de Actividades Complementarias): de  2:45 pm a 4:00 pm.
				</p>

				<button id="listMaterial"><i class="fas fa-th-list"></i>Lista de Materiales</button>

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
			<a href="preschool.php" class="menuN1">Preprimaria</a>
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
					<a href="../archives/CUARTO.pdf">
						<div class="itemUtil">
		
							Cuarto
						</div>
					</a>
				</div>
				<div class="contItemUtil">
					<a href="../archives/QUINTO.pdf">
					<div class="itemUtil">
	
						Quinto
					</div>
					</a>
					<a href="../archives/SEXTO.pdf">
					<div class="itemUtil">
	
						Sexto
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