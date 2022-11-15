<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

require_once("connect.php");

$correo = $_POST['correo'];
$query = "SELECT * FROM usuarios WHERE correo = '$correo' AND status = 1";
$result = $connect->query($query);

if ($result->num_rows > 0) {
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'prueba_proyecto_bd@hotmail.com';                     //SMTP username
    $mail->Password   = 'A111aA111a';                               //SMTP password
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('prueba_proyecto_bd@hotmail.com', 'Mailer');
    $mail->addAddress('gerardojccastro@gmail.com', 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperar contraseña';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {
    header("Location: ../index.php");
}
?>