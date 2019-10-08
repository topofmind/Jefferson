
	<div style="background: rgba(0,0,0,0.8);" class="modal" id="modalPer">
		<div class="contVideoRModal pac permanencia" id="contModalPer">
			<i class="fas fa-times-circle" id="closeModalPer"></i>
			<div class="modalcontPac Permanencia">
				<h2>Información Institucional de permanencia y actualización RTE 2019</h2>
				
				<p>
					<a href="../archives/Informacion-Institucional-para-permanencia-en-el-Regimen-Tributario-Especial.docx" target="_blank">
						<i class="fas fa-file-download"></i>
						Información Institucional para permanencia en el Régimen Tributario Especial
					</a>
				</p>
				<p>
					<a href="../archives/1-Denominacion-identificacion-domicilio-y-actividad-meritoria.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Denominación identificación domicilio y actividad meritoria
					</a>
				</p>
				<p>
					<a href="../archives/2-Memoria-economica-2018.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Memoria económica 2018
					</a>
				</p>
				<p>
					<a href="../archives/3-Informe-de-Gestion-ano-gravable-2018.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Informe de Gestión año gravable 2018
					</a>
				</p>
				<p>
					<a href="../archives/4-Estados-Financieros-a-Diciembre-31-de-2018.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Estados Financieros a Diciembre 31 de 2018
					</a>
				</p>
				<p>
					<a href="../archives/5-Certificacion-del-Representante-legal-y-Revisor-Fiscal-cumplimiento-de-requisitos.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Certificación del Representante legal y Revisor Fiscal cumplimiento de requisitos
					</a>
				</p>
				<p>
					<a href="../archives/6-Acta-de-constitucion.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Acta de constitución
					</a>
				</p>
				<p>
					<a href="../archives/7-Certificado-de-existencia-y-Representacion-Legal.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Certificado de existencia y Representación Legal
					</a>
				</p>
				<p>
					<a href="../archives/8-Copia-de-estatutos-y-resolucion-de-aprobacion.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Copia de estatutos y resolución de aprobación
					</a>
				</p>
				<p>
					<a href="../archives/9-Certificacion-Representante-Legal-de-antecedentes.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Certificación Representante Legal de antecedentes
					</a>
				</p>
				<p>
					<a href="../archives/10-Formato-5245-presentacion-de-permanencia-y-actualizacion-RTE-5245.pdf" target="_blank">
						<i class="fas fa-file-download"></i>
						Formato 5245 presentación de permanencia y actualización RTE 5245
					</a>
				</p>	
			</div>
		</div>
	</div>


<script>

	let linkPer = document.getElementById('linkPer');
	let modalPer = document.getElementById('modalPer');
	let closeModalPer = document.getElementById('closeModalPer');
	let contModalPer = document.getElementById('contModalPer');

	function interactiveModal(text,modal,closeModal,contModal){

		text.onclick = (e)=>{
				e.preventDefault();
				modal.classList.add("visible");
				contModal.classList.add("fadeUp");
			}
		

		closeModal.onclick = () =>{
			modal.classList.remove("visible");
		}

	}

	interactiveModal(linkPer,modalPer,closeModalPer,contModalPer);

</script>