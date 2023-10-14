const registrarseBtn = document.getElementById('regist');
const iniciarBtn = document.getElementById('iniciar');
const container = document.getElementById('container');

registrarseBtn.addEventListener('click', () => {
	container.classList.add("panel-activo");
});

iniciarBtn.addEventListener('click', () => {
	container.classList.remove("panel-activo");
});
function mostrarMensaje() {
	var mensaje = document.getElementById("mensaje");

	mensaje.style.display = 'flex';

	setTimeout(function () {
		mensaje.style.display = 'none';
	}, 2500);
}