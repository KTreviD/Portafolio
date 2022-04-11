var MenuBoton = document.querySelector('.MenuBoton');
var SeccionesOl = document.querySelector('.Ol');
var TarjetaSeccion = []; 
var IconoServicio = []; 
var TituloServicioTarjeta = []; 
var PresentarT = document.querySelector("#PresentarT");
var BanderaMexico = document.querySelector('#BanderaMx');
var BanderaUS = document.querySelector('#BanderaUs');
var TextoPrueba = document.querySelector("#TextoPrueba");
var SobreMiT = document.querySelector("#SobreMiT");
var ServiciosT = document.querySelector("#ServiciosT");
var TecnologiasT = document.querySelector("#TecnologiasT");
var ProyectosT = document.querySelector("#ProyectosT");
var ContactoT = document.querySelector("#ContactoT");
var SobreMiTT = document.querySelector("#SobreMiTT");
var ServiciosTT = document.querySelector("#ServiciosTT");
var TecnologiasTT = document.querySelector("#TecnologiasTT");
var ProyectosTT = document.querySelector("#ProyectosTT");
var ContactoTT = document.querySelector("#ContactoTT");
var TextoSobreMiT = document.querySelector("#TextoSobreMiT");
var DisenoIntuitivoT = document.querySelector(".DisenoIntuitivoT");
var RendimientoT = document.querySelector(".RendimientoT");
var ResponsivoT = document.querySelector(".ResponsivoT");
var CalidadT = document.querySelector(".CalidadT");
var DisenoLlamativoT = document.querySelector(".DisenoLlamativoT");
var TextoTecnologiasT = document.querySelector("#TextoTecnologiasT");
var NombreT = document.querySelector("#NombreT");
var NumeroT = document.querySelector("#NumeroT");
var MensajeT = document.querySelector("#MensajeT");
var SubmitT = document.querySelector("#SubmitT");
var CurriculumT = document.querySelector("#CurriculumT");
var TextoServicioT1 = document.querySelector("#TextoServicioT1");
var TextoServicioT2 = document.querySelector("#TextoServicioT2");
var TextoServicioT3 = document.querySelector("#TextoServicioT3");
var TextoServicioT4 = document.querySelector("#TextoServicioT4");
var TextoServicioT5 = document.querySelector("#TextoServicioT5");
var TextoServicioT6 = document.querySelector("#TextoServicioT6");
var NombreCT = document.querySelector("#Nombre");
var MensajeCT = document.querySelector("#Mensaje");
var TextoProyectoT1 = document.querySelector('#TextoProyectoT1');
var TextoProyectoT2 = document.querySelector('#TextoProyectoT2');

function LenguaMxF()
{
	PresentarT.innerHTML = "Hola me presento, soy";
	SobreMiT.innerHTML = "Sobre mi";
	ServiciosT.innerHTML = "Servicios";
	TecnologiasT.innerHTML = "Tecnologias";
	ProyectosT.innerHTML = "Proyectos";
	ContactoT.innerHTML = "Contacto";
	SobreMiTT.innerHTML = "Sobre mi";
	ServiciosTT.innerHTML = "Servicios";
	TecnologiasTT.innerHTML = "Tecnologias";
	ProyectosTT.innerHTML = "Proyectos";
	ContactoTT.innerHTML = "Contacto";
	TextoPrueba.innerHTML = "Desarrollador frontend enfocado en crear la mejor experiencia para el usuario.<br/>Conozco lo necesario sobre diseño y backend para que mis paginas cumplan los objetivos deseados.";
	TextoSobreMiT.innerHTML = "Soy Carlos, programador autodidacta, aprendi a programar en C++, programe videojuegos para Unity3D en C# y actualmente me dedico al desarrollo Front End.<br><br>Empeze a programar porque es un area que me interesa y apasiona, soy una persona a la cual le gusta aprender, me gusta mucho resolver todos los desafios que te encuentras a la hora de programar.<br><br>Soy bilingue, alguien sociable al que le gustan las artes marciales, los gatos, las redes sociales, con muchas ganas de aprender para lograr mis metas siendo feliz en el proceso.";
	DisenoIntuitivoT.innerHTML = "Diseño intuitivo";
	RendimientoT.innerHTML = "Rendimiento";
	ResponsivoT.innerHTML = "Responsivo";
	CalidadT.innerHTML = "Calidad";
	DisenoLlamativoT.innerHTML = "Diseño llamativo";
	TextoTecnologiasT.innerHTML = "Cuento con los conocimientos sobre backend para comunicarme eficientemente con el.";
	TextoServicioT1.innerHTML = "Mis desarrollos web tienen un diseño intuitivo y simple.";
	TextoServicioT2.innerHTML = "Tu sitio web estara optimizado de la mejor manera.";
	TextoServicioT3.innerHTML = "Mis desarrollos web siempre cuentan con las estrategias SEO.";
	TextoServicioT4.innerHTML = "Tu sitio web se adaptara a la resolución de cualquier dispositivo.";
	TextoServicioT5.innerHTML = "Mi desarrollo web garantiza la calidad de la pagina.";
	TextoServicioT6.innerHTML = "Tu sitio web contara con un diseño atractivo para los usuarios.";
	NombreT.innerHTML = "Nombre *";
	NumeroT.innerHTML = "Numero";
	MensajeT.innerHTML = "Mensaje *";
	SubmitT.innerHTML = "Enviar mensaje";
	CurriculumT.innerHTML = "Curriculum";
	NombreCT.placeholder = "Nombre";
	MensajeCT.placeholder = "Escribe tu mensaje aqui";
	TextoProyectoT1.innerHTML = "Links favoritos";
	TextoProyectoT2.innerHTML = "Tienda";
}

function LenguaUsF()
{
	PresentarT.innerHTML = "Hi, my name is";
	SobreMiT.innerHTML = "About me";
	ServiciosT.innerHTML = "Services";
	TecnologiasT.innerHTML = "Technologies";
	ProyectosT.innerHTML = "Projects";
	ContactoT.innerHTML = "Contact";
	SobreMiTT.innerHTML = "About me";
	ServiciosTT.innerHTML = "Services";
	TecnologiasTT.innerHTML = "Technologies";
	ProyectosTT.innerHTML = "Projects";
	ContactoTT.innerHTML = "Contact";
	TextoPrueba.innerHTML = "FrontEnd Developer specialized in giving the best user experience.<br/>I have basic knowledge about design and backend so that my pages meet the desired objectives.";
	TextoSobreMiT.innerHTML = "I am Carlos, a self-taught programmer, i learned to program in C++, i programed videogames for Unity3D in C# and i am currently dedicated to Front End development.<br><br>I started programming because it is an area that interests me and i am passionate about, i am a person who likes to learn and have challengues, i love solving all the problems that i face when i am programming.<br><br>I am bilingual, someone sociable who likes martial arts, cats, social networks, eager to learn and improve to achieve my goals, being happy in the process.";
	DisenoIntuitivoT.innerHTML = "Intuitive design";
	RendimientoT.innerHTML = "Performance";
	ResponsivoT.innerHTML = "Responsive";
	CalidadT.innerHTML = "Quality";
	DisenoLlamativoT.innerHTML = "Striking design";
	TextoTecnologiasT.innerHTML = "I have the knowledge about backend to communicate efficiently with it.";
	TextoServicioT1.innerHTML = "My web developments have an intuituve and simple desing.";
	TextoServicioT2.innerHTML = "Your website will be optimized in the best way.";
	TextoServicioT3.innerHTML = "My web developments always have the SEO strategies.";
	TextoServicioT4.innerHTML = "Your website will adapt to the resolution of any device.";
	TextoServicioT5.innerHTML = "My web developments guarantees the website quality.";
	TextoServicioT6.innerHTML = "Your website will have an attractive design for users.";
	NombreT.innerHTML = "Name *";
	NumeroT.innerHTML = "Number";
	MensajeT.innerHTML = "Message *";
	SubmitT.innerHTML = "Send message";
	CurriculumT.innerHTML = "Resume";
	NombreCT.placeholder = "Name";
	MensajeCT.placeholder = "Type your message here";
	TextoProyectoT1.innerHTML = "Favorite links";
	TextoProyectoT2.innerHTML = "Market";
}

if(localStorage.getItem("Lengua"))
{
	let Lengua = localStorage.getItem("Lengua");
	Lengua == "MX" ? LenguaMxF() : LenguaUsF() ;
}
else
{
	localStorage.setItem("Lengua","MX");
	LenguaMxF();
}

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

BanderaMexico.addEventListener('click', () =>
{
	localStorage.setItem("Lengua","MX");
	LenguaMxF();
});

BanderaUS.addEventListener('click', () =>
{
	localStorage.setItem("Lengua","US");
	LenguaUsF();
});



var Mascara = document.querySelector(".SeccionesCompleto");
var MenuDesplegable = document.querySelector(".SeccionesMenu");
var SpanBoton1 = document.querySelector('.SpanBoton1');
var SpanBoton2 = document.querySelector('.SpanBoton2');
var SpanBoton3 = document.querySelector('.SpanBoton3');

SpanBoton1.addEventListener('click', () =>
{
	MenuBoton.classList.toggle("Activo");
	Mascara.classList.toggle("AparecerMenu");
});

SpanBoton2.addEventListener('click', () =>
{
	MenuBoton.classList.toggle("Activo");
	Mascara.classList.toggle("AparecerMenu");
});

SpanBoton3.addEventListener('click', () =>
{
	console.log("hey");
	MenuBoton.classList.toggle("Activo");
	Mascara.classList.toggle("AparecerMenu");
});

MenuBoton.addEventListener('click', () =>
{
	MenuBoton.classList.toggle("Activo");
	Mascara.classList.toggle("AparecerMenu");
});

window.addEventListener('click', e =>
{
	if(Mascara.classList.contains('AparecerMenu')
		&& e.target != Mascara	&& e.target != MenuBoton)
	{
		Mascara.classList.toggle("AparecerMenu");
		MenuBoton.classList.toggle("Activo");
	}
});