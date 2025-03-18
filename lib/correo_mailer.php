<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);


try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = 'correo.cubicol.com.pe';
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;

    //Recipients
    $mail->setFrom('berkeley@cubicol.com.pe');
    $mail->FromName = 'PAG. WEB';
    $mail->addAddress('axelmol2018@gmail.com', 'COLEGIO BERKELEY');
    /* $mail->addAddress('admision@berkeley.edu.pe', 'COLEGIO BERKELEY');
    $mail->addCC('berkeleyschooladmissions@berkeley.edu.pe'); */

    //Content
    $mail->isHTML(true);
    $mail->Subject ='FORMULARIO DE CONTACTO';
    $mail->Body    = '
    <h4><b>INFORMACIÓN</b></h4>
            <p><b>Nombres : </b>' . $_POST['nombres'] . '</p>
            <p><b>Apellidos : </b>' . $_POST['apellidos'] . '</p>
            <p><b>DNI : </b>' . $_POST['dni'] . '</p>
            <p><b>Celular : </b>' . $_POST['celular'] . '</p>
            <p><b>Nivel : </b>' . $_POST['nivel'] . '</p>
            <p><b>Grado a Consultar : </b>' . $_POST['grado'] . '</p>
            <p><b>Consulta : </b>' . $_POST['consulta'] . '</p>';

    if ($mail->Send()) {

        echo "SE ENVIO LA CONSULTA CORRECTAMENTE";
    }
} catch (Exception $e) {
    echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
}

//print_r($_POST);

