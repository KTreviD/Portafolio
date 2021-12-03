var MenuBoton = document.querySelector('.MenuBoton');
var SeccionesOl = document.querySelector('.Ol');
var TarjetaSeccion = []; 
var IconoServicio = []; 
var TituloServicioTarjeta = []; 

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
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}