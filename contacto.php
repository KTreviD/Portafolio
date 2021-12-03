<?php
	
	if(isset($_POST['Contactar']))
	{
		if(!empty($_POST['Nombre']) && !empty($_POST['Email']) && !empty($_POST['Mensaje']))
		{
			$Nombre = trim($_POST['Nombre']);
			$Numero = trim($_POST['Numero']);
			$Email = trim($_POST['Email']);
			$Mensaje = "Nombre:" . $Nombre . " Numero: " . $Numero . "\n";
			$Mensaje .= "Email:" . $Email . "\n";
			$Mensaje .= trim($_POST['Mensaje']);

			$Asunto = "Contacto desde portafolio.";
			$header = "From: noreply@example.com" . "\r\n";
			$header.= "Reply-To: noreply@example.com" . "\r\n";
			$header.= "X-Mailer: PHP/" . phpversion();
			mail("carloscharlie4td@hotmail.com", $Asunto, $Mensaje, $header);
			header('Location: index.php');
		}
	}

?>