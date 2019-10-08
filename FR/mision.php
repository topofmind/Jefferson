<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Misión</title>

</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>Sobre nosotros</h1>
		</div>
		<div class="nosotros">
			<?php include_once 'menuNosotros.php' ?>
			<section class="contNosotros mision">
				
				<div class="misionText">
					<h2 class="misionH2">Misión</h2>
					<p><span id="p1" class="pClave1">Formamos</span>, con la debida participación de la <span id="p2" class="pClave2">familia</span>, a nuestros <span id="p3" class="pClave3">estudiantes</span>, como personas 
					<span id="p4" class="pClave4">autónomas</span>, con <span id="p5" class="pClave5">criterio y reflexivas</span>; <span id="p6" class="pClave6">trilingües</span>, comprometidas con el <span id="p7" class="pClave7">conocimiento</span> y con los <span id="p8" class="pClave8">valores</span> que les permitan construir su <span id="p9" class="pClave9">proyecto de vida</span> para contribuir al desarrollo de una sociedad más justa, donde prime el <span id="p10" class="pClave10">bien común</span> sobre el particular y el respeto por el <span id="p11" class="pClave11">entorno.</span></p>
				</div>

				<div class="VideoYoutube">
					<iframe src="https://www.youtube.com/embed/1kVJ7NJXNVE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
		</div>

		<?php include_once 'footer.php' ?>

	</div>

	<div class="modal image" id="modalGalery">
		<div class="contVideoRModal pac image" id="contModalGalery">
			<i class="fas fa-times-circle" id="closeModalGalery"></i>
			<div class="misionModal">
				<h3 id="titleP">Formamos</h3>
				<p id="textPMision">transformación adquiriendo saberes y experiencias para la vida </p>
			</div>
		</div>
	</div>

<script>

	let closeModalGalery = document.getElementById('closeModalGalery');
	let modalGalery = document.getElementById('modalGalery');
	let contModalGalery = document.getElementById('contModalGalery');

	let titleP = document.getElementById('titleP');
	let textP = document.getElementById('textPMision');

	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');
	let p1 = document.getElementById('p1');


	function textModal(p,title,text){
		
		p.onclick = ()=>{
			modalGalery.classList.add("visible");
			contModalGalery.classList.add("fadeUp");
		}

		titleP.innerHTML = title;
		textP.innerHTML = text;
	}

	closeModalGalery.onclick = () =>{
		modalGalery.classList.remove("visible");
	}


	textModal(p1,'Formamos','Transformación adquiriendo saberes y experiencias para la vida');

	textModal(p2,'Formamos','Transformación adquiriendo saberes y experiencias para la vida')

	textModal(p3,'Formamos','Transformación adquiriendo saberes y experiencias para la vida')


	




</script>

</body>
</html>