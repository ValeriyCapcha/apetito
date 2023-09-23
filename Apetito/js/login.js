const registrarseBtn = document.getElementById('regist');
const iniciarBtn = document.getElementById('iniciar');
const container = document.getElementById('container');

registrarseBtn.addEventListener('click', () => {
	container.classList.add("panel-activo");
});

iniciarBtn.addEventListener('click', () => {
	container.classList.remove("panel-activo");
});