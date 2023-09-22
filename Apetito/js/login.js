const registrarseBtn = document.getElementById('regist');
const iniciarBtn = document.getElementById('iniciar');
const container = document.getElementById('container');

registrarseBtn.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

iniciarBtn.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});