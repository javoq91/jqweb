<?php
	$email_to =   'jotaqu91@gmail.com';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject  =  $_POST['subject'];
	$message = $_POST['message'];

	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	mail($email_to, $subject, utf8_decode($mensaje), $header);

	header("Location:index.html");
?>
