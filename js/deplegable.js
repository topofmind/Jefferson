
let deplegable = document.getElementById('desplegable');
let menuNTitle = document.getElementById('menuNTitle');
let isDown = false;
menuNTitle.onclick = ()=>{
	
	isDown = !isDown;

	if (isDown) {
		desplegable.classList.add("down");
		desplegable.classList.remove("up");

	}else{
		desplegable.classList.remove("down");
		desplegable.classList.add("up");
	}
	
}