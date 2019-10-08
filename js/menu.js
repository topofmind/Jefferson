	let btnMenu = document.getElementById('btnMenu');
    let contMResp = document.getElementById('contMRespons');
    let menuResponsive = document.getElementById('menuResponsive');
    let bgMenu = document.getElementById('bgMenu');

	let menusDrop = document.getElementsByClassName('intern');
	let menusDropA = document.getElementsByClassName('elementA');
	let isDrop = [];

	// let QhacerResponsive = document.getElementById('QhacerResponsive');
	// let isQueHacerResposive = false;
	// let submenuResponsive = document.getElementById('submenuResponsive');

	// let queHacer = document.getElementById('queHacer');
	// let menuQueHacer = document.getElementById('menuQueHacer');
	// let isQueHacer = false;

	// menuQueHacer.onclick = ()=>{
	// 	isQueHacer = !isQueHacer;

	// 	if(isQueHacer){

	// 		queHacer.classList.remove("up");
	// 		queHacer.classList.add("down");
					
	// 	}else{
	// 		queHacer.classList.add("up");
	// 		queHacer.classList.remove("down");
	// 	}
	// }

	// QhacerResponsive.onclick = () =>{
	// 	isQueHacerResposive = !isQueHacerResposive;

	// 	if(isQueHacerResposive){
	// 		submenuResponsive.classList.remove("up");
	// 		submenuResponsive.classList.add("down");
	// 	}else{
	// 		submenuResponsive.classList.add("up");
	// 		submenuResponsive.classList.remove("down");
	// 	}
		

	// }



	btnMenu.onclick = function(){
		contMResp.className= 'contMRespons fadeIn'; 
        menuResponsive.className= 'menuResponsive fadeRight';
        bgMenu.className = 'bgMenu inBg';
	}

	 bgMenu.onclick = function(){
	 	contMResp.className= 'contMRespons fadeOut'; 
        menuResponsive.className= 'menuResponsive fadeLeft';
        bgMenu.className = 'bgMenu outBg';
	 }
	
		for(const index in menusDrop){

			isDrop.push(false);

			// console.log(menusDrop[index].firstElementChild.firstElementChild);

			menusDropA[index].onclick = function(){
				
				 isDrop[index] = !isDrop[index];

				if (isDrop[index]) {
					menusDrop[index].children[1].classList.remove("up");
					menusDrop[index].children[1].classList.add("down");
					
				}else{
					menusDrop[index].children[1].classList.add("up");
					menusDrop[index].children[1].classList.remove("down");

				}
			}
		}