// Parte do nome do Usuário

const usuario = prompt('Digite seu nome:');
const texto = window.document.getElementById('usuario');

texto.innerHTML = usuario;

// Parte do Id do Usuário

const numeroId = Math.floor(Math.random() * 100000);
const textoId = window.document.getElementById('usuarioid');
textoId.innerHTML = numeroId;

// Parte do InnerHTML - NUMEROID AND USUARIO

document.body.innerHTML(numeroId);
document.body.innerHTML(usuario);