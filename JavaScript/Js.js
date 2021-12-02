var MenuBoton = document.querySelector('.MenuBoton');
var SeccionesOl = document.querySelector('.Ol');
var TarjetaSeccion = []; 
var IconoServicio = []; 
var TituloServicioTarjeta = []; 
const IdNombre = document.querySelector('#Nombre');
const IdNumero = document.querySelector('#Numero');
const IdEmail = document.querySelector('#Email');
const IdMensaje = document.querySelector('#Mensaje');
const Span1 = document.getElementsByClassName('1');
const Span2 = document.getElementsByClassName('2');
const Span3 = document.getElementsByClassName('3');
const Span4 = document.getElementsByClassName('4');



function AnimarServicios(_NumeroServicio)
{
	TarjetaSeccion[_NumeroServicio].addEventListener("mouseover", () =>
	{
		IconoServicio[_NumeroServicio].classList.toggle("ServicioHover");
		TituloServicioTarjeta[_NumeroServicio].classList.toggle("ServicioHover");
	});

	TarjetaSeccion[_NumeroServicio].addEventListener("mouseout", () =>
	{
		IconoServicio[_NumeroServicio].classList.toggle("ServicioHover");
		TituloServicioTarjeta[_NumeroServicio].classList.toggle("ServicioHover");
	});

	TarjetaSeccion[_NumeroServicio].addEventListener('click', () =>
	{
		TarjetaSeccion[_NumeroServicio].classList.toggle("VoltearServicio");
	});
}

for(var i = 1 ; i < 7 ; i++)
{
	TarjetaSeccion[i] = document.getElementById("" + i);
	IconoServicio[i] = document.getElementById("" + i + "1");
	TituloServicioTarjeta[i] = document.getElementById("" + i + "2");
	AnimarServicios(i);
}

MenuBoton.addEventListener('click', () =>
{
	MenuBoton.classList.toggle("Activo");
	SeccionesOl.classList.toggle("TaparPoner");
});