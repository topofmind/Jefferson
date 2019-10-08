	function isIE () {
  		var myNav = navigator.userAgent.toLowerCase();
  		return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
	}

	if (isIE () == 8) {

		console.log(ingles);

		if (ingles) {
			alert('The browser you are using is not updated, so you will not be able to see our new webpage.');
			
		}else{

		 	// IE8 code
		 	alert('El navegador web que está utilizando no  está actualizado, por lo que no podrá ver la página web en su totalidad.');
		}


	 //  	document.onreadystatechange = function () {

	 // 		if(document.readyState === "complete") { 

		// 		var modal = document.getElementById('modalNav');
		// 		var closeModal = document.getElementById('closeModalNav');
		// 		var contModal = document.getElementById('contModalNav');

		// 		console.log(modal);

		// 		modal.className = "modal visible";
		// 		contModal.className = "contVideoRModal pac huerta fadeUp";

		// 		closeModal.onclick = function(){
		// 			modal.classList.remove("visible");
		// 		}

		// 	}else{
		// 		console.log("no completado");
		// 	}

		// }
		
	}

	var getBrowserInfo = function() {
	    var ua= navigator.userAgent, tem, 
	    M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
	    if(/trident/i.test(M[1])){
	        tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
	        return 'IE '+(tem[1] || '');
	    }

		 if(M[1]=== 'Chrome'){
        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
    	}

	    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
	    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
	    return M.join(' ');
	};

	var version = getBrowserInfo().substr(0,2);

	console.log(version)

	if (version === 'IE' || version === 'MS') {
		// console.log('explorer');

		document.addEventListener("DOMContentLoaded", function(event) { 

			var modal = document.getElementById('modalNav');
			var closeModal = document.getElementById('closeModalNav');
			var contModal = document.getElementById('contModalNav');

			// console.log(modal);

			modal.className = "modal visible";
			contModal.className = "contVideoRModal pac huerta fadeUp";

			closeModal.onclick = function(){
				modal.classList.remove("visible");
			}

		});
		
	}




	