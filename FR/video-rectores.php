<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Video Rectores</title>
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
				<h2 class="videoRectorsH2">Videos Rectores de Universidades</h2>
				<div class="text">
					<div class="VideoYoutube rector">
						<iframe  src="https://www.youtube.com/embed/F_Nn4nag37A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</section>
		</div>

		<?php include_once 'footer.php' ?>

	</div>

	<div class="modal image" id="modal">
		<div class="contVideoRModal" id="contModal">
			<div class="iframeVideoR">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/F_Nn4nag37A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<button id="closeModal">Cerrar</button>
		</div>
	</div>

</body>
</html>