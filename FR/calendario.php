<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once 'head.php' ?>
	<title>Colegio Jefferson |Calendario Insitucional</title>
</head>
<body>
	<?php include_once 'tagMannager.php' ?>
	<div class="contBox">

		<?php include_once 'menu.php' ?>

		<div class="bannerSections">
			<div class="titleBannerSection simple">
				<h1>CALENDARIO INSTITUCIONAL</h1>
			</div>
		</div>

		<div class="titleSecondary admission">
					<h2>Junio 2019</h2>
		</div>
		
		<section class="infoSeccion calendarioFull">

							
				<div class="googleCalendar">
				<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jefferson.edu.co_neqflnh2u66tg0ql7uc9phg99g%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=America%2FBogota" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

				</div>
			
				<div class="textCalendar">
					<p>Las fechas están sujetas a cambios de acuerdo con las necesidades de nuestros estudiantes y la agenda de la Secretaría de Educación</p>
				</div>
				
					
			
			
		</section>


		<?php include_once 'footer.php' ?>



	</div>

	<style>
	
	.titleSecondary{
		justify-content:center;
	}
		.googleCalendar{
  			position: relative;
  			height: 0;
  			width: 100%;
  			max-width: 800px;
  			padding-bottom: 60%;
  			margin: 15px auto 20px auto;
		}

		.googleCalendar iframe{
			position: absolute;
  			top: 0;
  			left: 0;
  			width: 100%;
  			height: 100%;
		}

		@media only screen and (max-width: 768px) {

			.googleCalendar{
				padding-bottom: 80%;
			}
		}

		@media only screen and (max-width: 600px) {

			.googleCalendar{
				padding-bottom: 90%;
			}
		}
	</style>
</body>
</html>