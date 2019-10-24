	<div class="modal" id="modal">
		<div class="contVideoRModal pac huerta" id="contModal">
			<!-- <i class="fas fa-times-circle" id="closeModal"></i> -->
			<div class="modalcontPac adv">
				
				<h2>¡Gracias por inscribirte a nuestro Café con Admisiones! Te estaremos contactando unos días antes de la fecha que elegiste, para confirmar tu asistencia.</h2>
				
			<a style="display: inline-block;margin: 0 auto;" href="../ES/inscripcion-cafe-admisiones.php">
				<button id="closeModal" style="display: inline-block;margin:15px auto;font-size: 1.2em" id="cafeAdmisiones" class="btnCafe inscribete">
					Aceptar
				</button>
			</a>
			</div>
		</div>
	</div>

	<script>

		let advanded = document.getElementById('advd');
		let closeModal = document.getElementById('closeModal');
		let modal = document.getElementById('modal');
		let contModal = document.getElementById('contModal');
	
	function interactiveModal(btn,modal,closeModal,contModal){

		// btn.onclick = ()=>{

				modal.classList.add("visible");
				contModal.classList.add("fadeUp");
			// }


		closeModal.onclick = () =>{
			modal.classList.remove("visible");
		}

	}

	interactiveModal(advanded,modal,closeModal,contModal)
	</script>