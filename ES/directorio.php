<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Directorio</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Directorio</h1>
			</div>
		</div>

		
		
		<section class="infoSeccion directorio">
            <div class="contDirectorio local">
				<a href="../archives/directorio-2018-2019.jpg" target="_blank">
                    <div class="imgDiectory">
                        <img src="../img/directorio-2018-2019.jpg" alt="">
                    </div>
                    <div class="directoryName  menuCafe">
                        Directorio Institucional Interno
                    </div>
                    
                </a>     
            </div>
            <div class="contDirectorio comunidad">
                <a href="http://jefferson.edu.co/directorio/">
                    <div class="imgDiectory">
                        <img src="../img/comunidad.jpg" alt="">
                    </div>
                    <div class="directoryName  menuCafe">
                        Directorio Comunidad
                    </div>
                </a> 
            </div>
        </section>


		<?php include_once 'footer.php' ?>

	</div>

	<script>
		let cafeAdmisiones = document.getElementById('cafeAdmisiones');
		let modal = document.getElementById('modal');
		let closeModal = document.getElementById('closeModal');
		let contModal = document.getElementById('contModal');

		cafeAdmisiones.onclick = ()=>{

			modal.classList.add("visible");
			contModal.classList.add("fadeUp");
		}


		closeModal.onclick = () =>{
			modal.classList.remove("visible");
		}
	</script>


</body>
</html>