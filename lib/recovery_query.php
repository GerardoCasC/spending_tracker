<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

require_once("connect.php");

$correo = $_POST['correo'];
$query = "SELECT * FROM usuarios WHERE correo = '$correo' AND status = 1";
$result = $connect->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'prueba_proyecto_bd@hotmail.com';                     //SMTP username
    $mail->Password   = 'A111aA111a';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('prueba_proyecto_bd@hotmail.com', 'Admin');
    $mail->addAddress('gerardojccastro@gmail.com', 'Prueba');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperación contraseña';
    $mail->Body    = 'Este correo es para la recuperación de su contraseña. Para continuar pulse aquí: <a href="localhost/spending_tracker/change_password.php?id='.$row['id'].'">Recuperación de contraseña</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location: ../index.php?message=ok");
} catch (Exception $e) {
    header("Location: ../index.php?message=KK");
}
} else {
    header("Location: ../index.php?message=No Found");
}
?>