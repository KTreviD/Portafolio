<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carlos Treviño Dueñas</title>
	<link rel="stylesheet" type="text/css" href="Css/Portafolio.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	<?php
		require_once('contacto.php');
	?>
	<header class="Header">
		<nav class="Nav">
			
				<div class="A">
						<img src="BanderasSvg/mx.svg" class="Bandera">
						<img src="BanderasSvg/us.svg" class="Bandera BDerecha">
				</div>
			
			<div class="SeccionesMenu">
				<ol class="Ol TaparPoner">
					<li class="Li">
						<a class="ASecciones" href="#SobreMi">Sobre mi</a>
					</li>
					<li class="Li">
						<a class="ASecciones" href="#Servicios">Servicios</a>
					</li>
					<li class="Li">
						<a class="ASecciones" href="#Tecnologias">Tecnologias</a>
					</li>
					<li class="Li">
						<a class="ASecciones" href="#Proyectos">Proyectos</a>
					</li>
					<li class="Li">
						<a class="ASecciones" href="#Contacto">Contacto</a>
					</li>
				</ol>
			</div>
			<div class="MenuBoton">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</nav>
	</header>

	<div orientation="right" class="AftersPadreRight">
		<div class="Afters">
			<p href="" class="Derecha">Carlos Treviño Dueñas </p>
		</div>
	</div>
	<div orientation="left" class="AftersPadreLeft">
		<div class="Afters">
			<p href="" class="Izquierda">Desarrollador Front End</p>
		</div>
	</div>


	<main class="Main">

		<section class="Main__YoResumido">
			<h2 class="PresentarNombre">Hola me presento, soy </h2>
			<p class="NombreTitulo">Carlos Treviño Dueñas.</p>
			<h2 class="TextoBreveInicio">Desarrollador frontend especializado en crear la mejor experiencia para el usuario.<br>Cuento con conocimientos basicos sobre diseño y backend para que mis paginas cumplan los objetivos deseados.</h2>
			<i class="fal fa-laptop-code IconoInicio"></i>
			<i class="fal fa-database IconoInicio2"></i>
		</section>

		<section class="Main__SobreMiC" id="SobreMi">
				<h2 class="TituloSecciones">Sobre mi</h2>
				<div class="ContenedorSobreMi">
					<div class="Texto">
						<h4 class="TextoSobreMi">
							Hola, me llamo Carlos y soy desarrollador frontend, aprendi a programar con C++, no solo he programado paginas web, tambien he programado videojuegos para Unity3D en C#.
							<br>
							<br>
							Empeze a programar porque soy una persona a la cual le gusta aprender y le gustan los retos, me gusta mucho resolver todos los problemas que te encuentras a la hora de programar.
							<br>
							<br>
							Soy una persona bilingue, una persona a la cual le encantan los deportes, una persona sociable, una persona con muchas ganas de aprender y mejorar para lograr sus metas siendo feliz en el proceso.
						</h4>
					</div>
					<div class="ImagenMiaContenedor">
						<img src="FotoMia.PNG" class="Foto">
					</div>

				</div>
				
		</section>

		<section class="Main__ServiciosC" id="Servicios">
			<h2 class="TituloSecciones">Servicios</h2>
			<div class="ContenedorServicios">
				<div class="Servicio" id="1">
					<div class="ServicioEnfrente">
						<i class="fal fa-lightbulb-on IconosServicios" id="11"></i>
						<h4 class="TituloServicioTarjeta" id="12">Diseño intuitivo</h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio">Aseguro un diseño con un uso facil y simple de entender.</p>
					</div>
				</div>
				<div class="Servicio" id="2">
					<div class="ServicioEnfrente">
						<i class="fal fa-tachometer-fastest IconosServicios" id="21"></i>
						<h4 class="TituloServicioTarjeta" id="22">Rendimiento</h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio">El que tu pagina carge rapido asegura que tus usuarios se queden en tu pagina.</p>
					</div>
				</div>
				<div class="Servicio" id="3">
					<div class="ServicioEnfrente">
						<i class="fal fa-search IconosServicios" id="31"></i>
						<h4 class="TituloServicioTarjeta" id="32">SEO</h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio">Tu sitio web siempre estara optimizado con las estrategias SEO.</p>
					</div>
				</div>
				<div class="Servicio" id="4">
					<div class="ServicioEnfrente">
						<i class="fal fa-phone-laptop IconosServicios" id="41"></i>
						<h4 class="TituloServicioTarjeta" id="42">Responsivo</h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio">Tu sitio se adaptara a cualquier resolucion del dispositivo donde se visite.</p>
					</div>
				</div>
				<div class="Servicio" id="5">
					<div class="ServicioEnfrente">
						<i class="fal fa-file-certificate IconosServicios" id="51"></i>
						<h4 class="TituloServicioTarjeta" id="52">Calidad</h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio">Puedes estar seguro que mi desarrollo web garantiza la calidad de la pagina.</p>
					</div>
				</div>
				<div class="Servicio" id="6">
					<div class="ServicioEnfrente">
						<i class="fal fa-pencil-paintbrush IconosServicios" id="61"></i>
						<h4 class="TituloServicioTarjeta" id="62">Diseño llamativo</h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio">Mis sitios siempre tendran un diseño atractivo para los usuarios.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="Main__TecnologiasC" id="Tecnologias">
			<h2 class="TituloSecciones">Tecnologias</h2>
			<div class="ContenedorTecnologias">
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-html5 IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">HTML</p>
				</div>
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-css3-alt IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">CSS</p>
				</div>
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-js-square IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">Javascript</p>
				</div>
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-react IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">React</p>
				</div>
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-node IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">Node JS</p>
				</div>
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-git-alt IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">GIT</p>
				</div>
				<div class="Tecnologia">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<i class="fab fa-php IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">Php</p>
				</div>
				<div class="Tecnologia">
					
					<i class="fad fa-database IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">SQL</p>
				</div>
			</div>
			<h4 class="TextoTecnologias">Cuento con los conocimientos necesarios sobre backend para comunicarme eficientemente con el.</h4>
		</section>
		<section class="Main__ProyectosC" id="Proyectos">
			<h2 class="TituloSecciones">Proyectos</h2>
			<div class="ContenedorProyecto">
				<a href="objetosusuarios.com" class="LinkProyecto MrR">
					<div class="Proyectos">
						
					</div>
				</a>
				<a href="nodeestadisticasclima.com" class="LinkProyecto">
					<div class="Proyectos">
						
					</div>
				</a>
			</div>
		</section>
		<section class="Main__ContactoC" id="Contacto">
			<h2 class="TituloSecciones">Contactame</h2>
			<form class="FormContacto" method="post">
				<div class="FormContacto__Iconos">
					<i class="fal fa-user IconoContacto"></i>
					<div class="BarraContactoInfo">
						<a target="_blank" href="mailto:carloscharlie4td@hotmail.com" class="Links">
							<i class="fas fa-envelope-square IconosIzquierdaContacto"></i>
						</a>
						<a target="_blank" href="https://github.com/KTreviD?tab=repositories" class="Links">
							<i class="fab fa-github-square IconosIzquierdaContacto"></i>
						</a>
						<a target="_blank" href="https://www.instagram.com/dssssstc" class="Links">
							<i class="fab fa-instagram IconosIzquierdaContacto"></i>
						</a>
					</div>
				</div>
				<div class="FormContacto__Info">
					<label class="Labels" for="Nombre">Nombre *</label>
					<div class="GeneralesDiv">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<input class="Generales" type="text" name="Nombre" placeholder="Nombre" id="Nombre" required="">
					</div>
					
					<label class="Labels" for="Numero">Numero</label>
					<div class="GeneralesDiv">
						<span class="2"></span>
						<span class="2"></span>
						<span class="2"></span>
						<span class="2"></span>
						<input class="Generales" type="text" name="Numero" placeholder="Numero" id="Numero">
						
					</div>
					
					<label class="Labels" for="Email">Email *</label>
					<div class="GeneralesDiv">
						<span class="3"></span>
						<span class="3"></span>
						<span class="3"></span>
						<span class="3"></span>
						<input class="Generales" type="text" name="Email" placeholder="Email" id="Email" required="">
					</div>
		    	    
		    	    <label class="Labels" for="Mensaje">Mensaje *</label>
		    	    <div class="GeneralesDiv Mensaje">
		    	    	<span class="4"></span>
						<span class="4"></span>
						<span class="4"></span>
						<span class="4"></span>
		    	    	<textarea class="Generales TextoArriba" name="Mensaje" placeholder="Escribe tu mensaje aqui" id="Mensaje" required=""></textarea> 
		    	    </div>
		    	    
		       		<button class="Submit" type="submit" name="Contactar">Mandar mensaje</button>
				</div>
			</form>
		</section>
	</main>

	<footer class="Footer">
		<button class="Resume">Resume</button>
		<div class="FooterDiv">
			Copyright © 2021 <br>
			Todos los derechos reservados
		</div>

		
	</footer>
	<script type="text/javascript" src="JavaScript/Js.js"></script>
</body>

</html>
