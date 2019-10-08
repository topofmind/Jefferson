<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson | Menu Cafeteria</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>Menu Cafeteria</h1>
			</div>
		</div>

		<section class="infoSeccion directorio">
            <div class="contDirectorio local">
            	<a class="aDirect" href="../archives/cafeteria-preprimaria.jpg" target="_blank">
                    <div class="imgDiectory " id="presPri">
                        <img src="../img/cafeteria-primaria-preescolar.jpg" alt="">
                    </div>
                    <div class="directoryName menuCafe">
						Cafeteria Preprimary 
                    </div> 
                </a>   
            </div>
            <div class="contDirectorio  comunidad">
            	<a class="aDirect" href="../archives/cafeteria-primaria-junior-senior.jpg" target="_blank">
                    <div class="imgDiectory" id="junSen">
                        <img src="../img/cafeteria-junior-senior.jpg" alt="">
                    </div>
                    <div class="directoryName menuCafe">
						Cafeteria Primary, Junior y Senior
                    </div>
                </a>
            </div>
        </section>

        <section class="pagos">
			<a href="http://jefferson.softcafeteria.com/" target="_blank">
				<img src="../img/btnFinalPagos.png" alt="">
			</a>
		</section>


		<?php include_once 'footer.php' ?>

	</div>
	<div class="modal" id="modal">
		<div class="contVideoRModal pac huerta" id="contModal">
			<i class="fas fa-times-circle" id="closeModal"></i>
			<div class="modalMenuCafe">
		
				<h2>Cafeteria Preprimary</h2>

				<a href="../archives/cafeteria-preescolar.jpg" target="_blank">
					<i class="fas fa-utensils"></i> Preprimary PAC
				</a>
				<!-- <a href="../archives/cafeteria-primaria.jpg" target="_blank">
					<i class="fas fa-utensils"></i> Preprimaria
				</a> -->
				

			</div>
		</div>
	</div>

	<div class="modal" id="modal2">
		<div class="contVideoRModal pac huerta" id="contModal2">
			<i class="fas fa-times-circle" id="closeModal2"></i>
			<div class="modalMenuCafe">
				
				<h2>Cafeteria Primary, Junior y Senior</h2>

				<a href="../archives/cafeteria-junior-senior.jpg" target="_blank">
					<i class="fas fa-utensils"></i> Primary - Junior - Senior
				</a>
				
			</div>
		</div>
	</div>
	<script>

		
	let menuCafeteria1 = document.getElementById('presPri');
	let closeModal1 = document.getElementById('closeModal');
	let modal1 = document.getElementById('modal');
	let contModal1 = document.getElementById('contModal');

	let menuCafeteria2 = document.getElementById('junSen');
	let closeModal2 = document.getElementById('closeModal2');
	let modal2 = document.getElementById('modal2');
	let contModal2 = document.getElementById('contModal2');


	function interactiveModal(btn,modal,closeModal,contModal){

		btn.onclick = ()=>{

				modal.classList.add("visible");
				contModal.classList.add("fadeUp");
			}


		closeModal.onclick = () =>{
			modal.classList.remove("visible");
		}

	}

	//interactiveModal(menuCafeteria1,modal1,closeModal1,contModal1)

	//interactiveModal(menuCafeteria2,modal2,closeModal2,contModal2)

	</script>
</body>
</html>