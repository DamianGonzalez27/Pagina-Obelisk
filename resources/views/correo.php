<?php 

if (isset ($_POST['nombre']!='')&&($_POST['asunto']!='')&&($_POST['correo']!='')&&($_POST['mensaje']!='')) {
	# code...

    $fetha=date("d-m-Y");
    $hora=date("H:i:s");
    $asunto=$_POST['asunto'];
    $desde='From: ' . $_POST['correo'];
    $destino="codigoparallevar@gmail.com";
    $mensaje=$_POST['mensaje'];

    mail("codigoparallevar@gmail.com", $asunto, $mensaje);

}

 ?>