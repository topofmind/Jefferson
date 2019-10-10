<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Preprimaria</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>PREPRIMARIA</h1>
		</div>

		<div class="titleSecondary">
			<h2>Proyecto Pedagógico</h2>
		</div>
		
		<section class="infoSeccion">
			<div class="description">

				<p class="HS"><span class="firstLeter">E</span>spacio de crecimiento personal para descubrir las propias posibilidades, reconocer a los otros y construir nuevos conocimientos.</p>

				<p><b class="prKndr">Kinder, Transition & First Grade</b> <br></p>

				<p>
					 
					Preprimaria del Colegio Jefferson es el espacio donde nuestros estudiantes inician su vida escolar a través de la vivencia de muchas y diversas experiencias significativas. Durante estos tres años van creciendo en las maneras de relacionarse con sus compañeros y maestros, logran expresar sus ideas, escuchar la opinión de los demás y establecer acuerdos. Empiezan a afianzar su autonomía dando cuenta de lo que hacen, establecen compromisos y responden por sus acciones y materiales. También van consolidando su independencia al reconocer sus posibilidades y validar las opiniones de los otros. 
				</p>
				<p>	
					Concebimos a nuestros estudiantes como los protagonistas de sus procesos de crecimiento y aprendizaje. Esto lo promovemos a través de las propuestas pedagógicas, donde la buena literatura en ambos idiomas les permite maravillarse con los relatos de los textos propuestos. A partir de una propuesta lúdica que les brinda espacios de juego, creación e imaginación, exploran, observan y se preguntan por los cambios de su entorno, afianzan conceptos y conociemientos en las distintas areas del saber y logran su inmersión en la segunda lengua con mucha tranquilidad y naturalidad. 
  
				</p>

				<p> 
					Toda la propuesta está enfocada en promover en nuestros niños competencias que les permitan construir diferentes maneras de pensar, buscar soluciones a los problemas y apropiarse de diversas maneras de trabajar. La comunicación es el eje central de los acuerdos, se les brindan espacios donde ellos van fortaleciendo las diversas herramientas para asumir las exigencias que les propondrá su vida adulta. De esta manera podrán vivir en el mundo con responsabilidad social y conciencia global.</p>

				<p>
					<span><b>Edades:</b></span> <br>
					Recibimos a los niños en nuestro primer nivel (Kinder), con 4 años cumplidos al 31 de julio. En Transition las edades de los niños están entre 5 y 6 años; y en First Grade entre 6 y 7 años.
				</p>

				<p>
					<span><b>Horario</b></span> <br>
					Jornada curricular: 7:15 am a 12:15 pm <br> 
					PAC (Programa de Actividades Complementarias): de 12:30 pm a 2:30 pm.
				</p>

				<p class="smallText">*Para el PAC nuestros niños cuentan con espacio y acompañamiento para el almuerzo, que puede ser lonchera o de la cafetería.	</p>

				<button id="listMaterial"><i class="fas fa-th-list"></i>Lista de Materiales</button>
			
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
							<a href="../archives/kinder.pdf">
								<div class="itemUtil">

									Kínder
								</div>
							</a>
							<a href="../archives/transicion.pdf">
								<div class="itemUtil">

									Transición
								</div>
							</a>
						</div>
						<div class="contItemUtil">
							<a href="../archives/primero.pdf">
							<div class="itemUtil">
								Primero
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