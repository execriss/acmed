<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['msg'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['msg'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'egc.criss@gmail.com';
$asunto = 'Mensaje de pagina ACMED';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");
?>