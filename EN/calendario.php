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
				<h1>Monthly Agenda</h1>
			</div>
		</div>

		<div class="titleSecondary admission">
			<?php  $meses = ['','January','February','March','April','May','June','July','August','September','October','November','December'];?>

			<h2><?php echo $meses[date("n")]; ?> 2019</h2>
		</div>
		
		<section class="infoSeccion calendarioFull">

							
				<div class="googleCalendar">
					<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FBogota&amp;src=amVmZmVyc29uLmVkdS5jb19kMmRmM2NnMG1rbmY2cm03bmRzY2RxaWhjb0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23D81B60&amp;showNav=1&amp;showTabs=0&amp;showTitle=0" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

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
  			margin: 15px auto 40px auto;
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