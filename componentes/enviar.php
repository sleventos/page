 <?php

require('./class.phpmailer.php');
require('./class.smtp.php');

$mail = new PHPMailer();

//$message .= "<br><br><img src='https://www.socasesores.com/img/certificado/universidadCertificacion.jpg'>";
$message .= "<br><br>";
$message .="<h2>Información de contacto</h2>" ."<br>";
$message .="<strong> Nombre: </strong> " . $_POST['nombre'] . ' ' ."<br>";
$message .="<strong> Correo: </strong> " . $_POST['correo'] . ' ' ."<br>"; 
$message .="<strong> Teléfono: </strong> " . $_POST['telefono'] . ' ' ."<br>"; 
$message .="<strong> Información: </strong> " . $_POST['informacion'] . ' ' ."<br>"; 


//$mail->IsSMTP(); 
$mail->Host = "mail.socasesores.com";
$mail->Port = 587;
$mail->From = "contacto@socasesores.com";
$mail->FromName = "Información de producto";
$mail->Subject = "Productos SOC";
$mail->CharSet = 'UTF-8';
$mail->MsgHTML(utf8_decode($message));
$mail->AddAddress("mercahipotecario@gmail.com", "SOC Merca"); 
//$mail->AddAddress("mercahipotecario@gmail.com", "SOC Merca"); 
$mail->SMTPAuth = true;
$mail->Username = "contacto@socasesores.com";
$mail->Password = "8vDsmTwOn1";

if(!$mail->Send()) {
echo "Error, intentelo de nuevo. " . $mail->ErrorInfo;
} else {
//echo "¡¡Enviado!!";
}

////////////////////////////////CORREO DE RESPUESTA


$mail2 = new PHPMailer();

$message2 .= "<br><br><br><img src='https://www.socasesores.com/img/soc.jpg'><br><br><br>";
$message2 =  "<br><br><br><h2>SOC Líderes en Asesoría Financiera</h2><br>";
$message2 .= "Tu correo nos llego exitosamente, pronto un Asesor SOC se pondrá en contacto contigo.<br>";
$message2 .= "www.socasesores.com<br><br><br><br>";

$message2 .= "<small>En cumplimiento de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, SINERGIA SOC S.A. de C.V con domicilio en Calle Hamburgo No. 227, Colonia Juárez, Delegación Cuauhtémoc, Ciudad de México, C. P. 06600. Al proporcionar de manera voluntaria sus datos personales, estará autorizando a Sinergia SOC el tratamiento de los mismos. Para mayor información consulta el aviso de privacidad integral en la página: www.socasesores.com</small>";

//$mail2->AddAttachment('./images/descargas/MB_PRESENTACION.pdf','MB_PRESENTACION.pdf');
//$mail2->AddAttachment('./images/descargas/PRESOLICITUD.xlsx','PRESOLICITUD.xlsx');
//$mail2->IsSMTP(); 
$mail2->Host = "mail.socasesores.com";
$mail2->Port = 587;
$mail2->From = "contacto@socasesores.com";
$mail2->FromName = "SOC Líderes en Asesoría Financiera";
$mail2->CharSet = 'UTF-8';
$mail2->Subject = "¡Hola ". $_REQUEST['nombre']. '! ' ."agradecemos tu interés, pronto estarás recibiendo información del producto que necesitas";
$mail2->MsgHTML(utf8_decode($message2));
$mail2->AddAddress($_REQUEST['correo'], $_REQUEST['nombre']);
$mail2->SMTPAuth = true;
$mail2->Username = "contacto@socasesores.com";
$mail2->Password = "8vDsmTwOn1";

if(!$mail2->Send()) {
echo "Error, intentelo de nuevo. " . $mail2->ErrorInfo;
} else {
//echo "¡¡Enviado!!";
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOC Líderes en Asesoría Financiera</title>
        <link rel="icon" type="image/png" href="./img/favicon.png"/>

       <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        
        <!-- ICONOS -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <!-- or -->
        <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="css/themify/themify.css"/>

        <link rel="stylesheet" type="text/css" href="css/museo/museo.css"/>
        <link rel="stylesheet" type="text/css" href="css/buscador.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/producto.css"/>
        <link rel="stylesheet" type="text/css" href="css/preguntas.css"/>
    </head>
	<body id="page">
		<!-- Preloader -->
		<div class="contenedorPreloader">
        	<div class="load">
            	<hr/><hr/><hr/><hr/><hr/>
        	</div>
    	</div>
<!-- MENU -->
<!-- ------------------------------------------------------------------------------------------------------- -->
        <?php include './componentes/menu.php';?>
<!-- ------------------------------------------------------------------------------------------------------- -->
        <div class="creditoPersonal">
            <div class="divMenu">
                <ul>
                    <li>
                        <div>
                            <a href="index.php">
                                <!--img src="./img/iconos/inicio.svg"-->Inicio
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="cotizador.php">
                                <!--img src="./img/iconos/SOC.svg"-->Cotizador
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="personas.php">
                                <!--img src="./img/iconos/asesores.svg"-->Personas
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="empresas.php">
                                <!--img src="./img/iconos/empresa.svg"-->Empresas
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="Asesor/Buscador.php" target="_blank">
                                <!--img src="./img/iconos/contacto.svg"-->Buscar Asesor
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="contacto.php">
                                <!--img src="./img/iconos/contacto.svg"-->Contacto
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- -->
        <div class="Respuesta">
            <div class="RespuestaInfo">
                <div>
                	<i class="bx bx-message-square-check"></i>
                	<h3>Tu correo se envió exitosamente</h3>
                	<p>Pronto nos pondremos en contacto</p>
                	<a href="index.php"> Ir al inicio</a>
                </div>
            </div>
        </div>
<!-- FOOTER -->
<!-- ------------------------------------------------------------------------------------------------------- -->
        <?php include './componentes/footer.php';?>
<!-- ------------------------------------------------------------------------------------------------------- -->


