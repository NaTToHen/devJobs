var modal = document.querySelector('#modal');
var fundomodal = document.querySelector('#fundoModal');

var vagas = document.querySelector('.vagas');
var usuarios = document.querySelector('.usuarios');

function abrirModal() {
   modal.style.display = 'block';
   fundomodal.style.display = 'block';
}

function fecharModal() {
   modal.style.display = 'none';
   fundomodal.style.display = 'none';
}

function mostrarUsuarios() {
   usuarios.style.display = 'block';
}
function fecharUsuarios() {
   usuarios.style.display = 'none';
}

function mostrarVagas() {
   vagas.style.display = 'block';
}
function fecharVagas() {
   vagas.style.display = 'none';
}