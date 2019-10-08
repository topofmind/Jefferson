<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Mission</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="titleIzq">
			<h1>About Us</h1>
		</div>
		<div class="nosotros">
			<?php include_once 'menuNosotros.php' ?>
			<section class="contNosotros">
				<div class="misionText">
					<h2 class="misionH2">Mission</h2>
					<p><span class="pClave1">We form</span>  our students with the adequate  participation of their <span class="pClave2">family</span>, as <span class="pClave4">autonomous</span>, <span class="pClave5">critical and reflective citizens</span>, <span class="pClave6">trilingual</span>, committed to <span class="pClave7">learning</span> and with the <span class="pClave8">values</span> that will enable them to <span class="pClave9">construct their futures</span> with the purpose of contributing to a more just society, where the <span class="pClave10">common good</span> prevails over the individual and there is respect for the <span class="pClave11">environment</span>.</p>

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
				<h3>Formamos</h3>
				<p>transformación adquiriendo saberes y experiencias para la vida </p>
			</div>
		</div>
	</div>


</body>
<script>
	
	let p1 = document.getElementsByClassName('pClave1');

	p1.onclick = ()=>{
		alert('click')
	}

</script>
</html>