<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);
$params = $_POST;
$adjunto = $_FILES['files'];
if (!empty($params)) {
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
        $mail->addAddress('workwithus@berkeley.edu.pe', 'COLEGIO BERKELEY');
        /* $mail->AddAddress('recruitment@davycollege.edu.pe', 'COLEGIO DAVY COLLEGE'); */
        $mail->addCC('axelmol2018@gmail.com');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'ENVIANOS TU CV';
        $mail->Body    = '
    <h4><b>INFORMACIÓN</b></h4>
            <p><b>Nombres : </b>' . $params['nombre'] . '</p>
            <p><b>Correo : </b>' . $params['correo'] . '</p>
            <p><b>Celular : </b>' . $params['celular'] . '</p>
            <p><b>Postula a : </b>' . $params['cargo'] . '</p>';

        $cont = 0;
        foreach ($adjunto['tmp_name'] as $file_name) {
            $mail->AddAttachment($file_name, $adjunto['name'][$cont]);
            $cont++;
        }

        if ($mail->Send()) {

            echo "SE ENVIO LA CONSULTA CORRECTAMENTE";
        }
    } catch (Exception $e) {
        echo 'OCURRIÓ UN ERROR, NO SE PUDO PROCESAR EL ENVÍO';
    }
}
//print_r($_POST);
