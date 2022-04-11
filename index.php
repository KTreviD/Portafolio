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
	
	<div class="SeccionesCompleto">
		<div class="SeccionesBlurr">
			
		</div>
		<div class="SeccionesMenu">
			<ol class="Ol TaparPoner">
				<li class="Li">
					<a class="ASecciones" href="#SobreMi" id="SobreMiT"></a>
				</li>
				<li class="Li">
					<a class="ASecciones" href="#Servicios" id="ServiciosT"></a>
				</li>
				<li class="Li">
					<a class="ASecciones" href="#Tecnologias" id="TecnologiasT"></a>
				</li>
				<li class="Li">
					<a class="ASecciones" href="#Proyectos" id="ProyectosT"></a>
				</li>
				<li class="Li">
					<a class="ASecciones" href="#Contacto" id="ContactoT"></a>
				</li>
				</ol>
		</div>
	</div>

	<header class="Header">
		<nav class="Nav">
			
				<div class="A">
						<img src="BanderasSvg/mx.svg" class="Bandera" id="BanderaMx">
						<img src="BanderasSvg/us.svg" class="Bandera BDerecha" id="BanderaUs">
				</div>
			<div class="MenuBoton">
				<span class="SpanBoton1"></span>
				<span class="SpanBoton2"></span>
				<span class="SpanBoton3"></span>
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
			<p href="" class="Izquierda">Front End Developer Jr</p>
		</div>
	</div>


	<main class="Main">

		<section class="Main__YoResumido">
			<h2 class="PresentarNombre" id="PresentarT"></h2>
			<p class="NombreTitulo">Carlos Treviño Dueñas.</p>
			<h2 class="TextoBreveInicio" id="TextoPrueba"></h2>
		</section>

		<section class="Main__SobreMiC" id="SobreMi">
				<h2 class="TituloSecciones" id="SobreMiTT"></h2>
				<div class="ContenedorSobreMi">
					<div class="Texto">
						<h4 class="TextoSobreMi" id="TextoSobreMiT">
						</h4>
					</div>
					<div class="ImagenMiaContenedor">
						<img src="FotoMia.PNG" class="Foto">
					</div>

				</div>
				
		</section>

		<section class="Main__ServiciosC" id="Servicios">
			<h2 class="TituloSecciones" id="ServiciosTT"></h2>
			<div class="ContenedorServicios">
					<div class="Servicio" id="1">
					<div class="ServicioEnfrente">
						<i class="fal fa-lightbulb-on IconosServicios" id="11"></i>
						<h4 class="TituloServicioTarjeta DisenoIntuitivoT" id="12"></h4>
					</div>
					<div class="ServicioAtras">
						<p class="TextoServicio" id="TextoServicioT1"></p>
					</div>
					</div>
					<div class="Servicio" id="2">
						<div class="ServicioEnfrente">
							<i class="fal fa-tachometer-fastest IconosServicios" id="21"></i>
							<h4 class="TituloServicioTarjeta RendimientoT" id="22"></h4>
						</div>
						<div class="ServicioAtras">
							<p class="TextoServicio" id="TextoServicioT2"></p>
						</div>
					</div>
					<div class="Servicio" id="3">
						<div class="ServicioEnfrente">
							<i class="fal fa-search IconosServicios" id="31"></i>
							<h4 class="TituloServicioTarjeta" id="32">SEO</h4>
						</div>
						<div class="ServicioAtras">
							<p class="TextoServicio" id="TextoServicioT3"></p>
						</div>
					</div>
					<div class="Servicio" id="4">
						<div class="ServicioEnfrente">
							<i class="fal fa-phone-laptop IconosServicios" id="41"></i>
							<h4 class="TituloServicioTarjeta ResponsivoT" id="42"></h4>
						</div>
						<div class="ServicioAtras">
							<p class="TextoServicio" id="TextoServicioT4"></p>
						</div>
					</div>
					<div class="Servicio" id="5">
						<div class="ServicioEnfrente">
							<i class="fal fa-file-certificate IconosServicios" id="51"></i>
							<h4 class="TituloServicioTarjeta CalidadT" id="52"></h4>
						</div>
						<div class="ServicioAtras">
							<p class="TextoServicio" id="TextoServicioT5"></p>
						</div>
					</div>
					<div class="Servicio" id="6">
						<div class="ServicioEnfrente">
							<i class="fal fa-pencil-paintbrush IconosServicios" id="61"></i>
							<h4 class="TituloServicioTarjeta DisenoLlamativoT" id="62"></h4>
						</div>
						<div class="ServicioAtras">
							<p class="TextoServicio" id="TextoServicioT6"></p>
						</div>
					</div>
			</div>
		</section>
		<section class="Main__TecnologiasC" id="Tecnologias">
			<h2 class="TituloSecciones" id="TecnologiasTT"></h2>
			<div class="ContenedorTecnologias">
				<div class="Tecnologia">
					<i class="fab fa-html5 IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">HTML</p>
				</div>
				<div class="Tecnologia">
					<i class="fab fa-css3-alt IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">CSS</p>
				</div>
				<div class="Tecnologia">
					<i class="fab fa-js-square IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">Javascript</p>
				</div>
				<div class="Tecnologia">
					<i class="fab fa-react IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">React</p>
				</div>
				<div class="Tecnologia">
					<i class="fab fa-node IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">Node JS</p>
				</div>
				<div class="Tecnologia">
					<i class="fab fa-git-alt IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">GIT</p>
				</div>
				<div class="Tecnologia">
					<i class="fab fa-php IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">Php</p>
				</div>
				<div class="Tecnologia">
					<i class="fad fa-database IconosTecnologias"></i>
					<p class="TituloTecnologiasTarjeta">SQL</p>
				</div>
			</div>
			<h4 class="TextoTecnologias" id="TextoTecnologiasT"></h4>
		</section>
		<section class="Main__ProyectosC" id="Proyectos">
			<h2 class="TituloSecciones" id="ProyectosTT"></h2>
			<div class="ContenedorProyecto">
				<div class="ContenedorContenedorProyecto">
					<p class="NombreProyecto" id="TextoProyectoT1"></p>
					<a href="objetosusuarios.com" class="LinkProyecto MrR">
						<div class="Proyectos">
							
						</div>
					</a>
				</div>
				<div class="ContenedorContenedorProyecto">
					<p class="NombreProyecto" id="TextoProyectoT2"></p>
					<a href="nodeestadisticasclima.com" class="LinkProyecto">
						<div class="Proyectos">
							
						</div>
					</a>
				</div>
			</div>
		</section>
		<section class="Main__ContactoC" id="Contacto">
			<h2 class="TituloSecciones" id="ContactoTT"></h2>
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
					<label class="Labels" for="Nombre" id="NombreT"></label>
					<div class="GeneralesDiv">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<input class="Generales" type="text" name="Nombre" id="Nombre" required="" oninvalid="localStorage.getItem('Lengua') == 'MX' ? this.setCustomValidity('Porfavor introduce tu nombre.') : this.setCustomValidity('Please introduce your name.')" oninput="setCustomValidity('')">
					</div>
					
					<label class="Labels" for="Numero" id="NumeroT"></label>
					<div class="GeneralesDiv">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<input class="Generales" type="text" name="Numero" placeholder="+1 (123) 456 7890" id="Numero">
						
					</div>
					
					<label class="Labels" for="Email">Email *</label>
					<div class="GeneralesDiv">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<input class="Generales" type="text" name="Email" placeholder="Email" id="Email" required="" oninvalid="localStorage.getItem('Lengua') == 'MX' ? this.setCustomValidity('Porfavor introduce tu email.') : this.setCustomValidity('Please introduce your email.')" oninput="setCustomValidity('')">
					</div>
		    	    
		    	    <label class="Labels" for="Mensaje" id="MensajeT"></label>
		    	    <div class="GeneralesDiv Mensaje">
		    	    	<span></span>
						<span></span>
						<span></span>
						<span></span>
		    	    	<textarea class="Generales TextoArriba" name="Mensaje" id="Mensaje" required="" oninvalid="localStorage.getItem('Lengua') == 'MX' ? this.setCustomValidity('Porfavor escribe tu mensaje.') : this.setCustomValidity('Please type your message.')" oninput="setCustomValidity('')"></textarea> 
		    	    </div>
		    	    
		       		<button class="Submit" type="submit" name="Contactar" id="SubmitT"></button>
				</div>
			</form>
		</section>
	</main>

	<footer class="Footer">
		<button class="Resume" id="CurriculumT"></button>
		<div class="FooterDiv" id="Copyright">
			Copyright © 2022 <br>
			Todos los derechos reservados.
		</div>
	</footer>
	<script type="text/javascript" src="JavaScript/Js.js"></script>
</body>

</html>
