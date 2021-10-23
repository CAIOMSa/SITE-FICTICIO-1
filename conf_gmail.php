<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
$titulo = $_POST['titulo'];
$texto = $_POST['mensagem'];
try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'EMAIL';
	$mail->Password = 'SENHA';
	$mail->Port = 587;
 
	$mail->setFrom('EMAIL');
	$mail->addAddress('EMAIL');
 
	$mail->isHTML(true);
	$mail->Subject = $titulo;
	$mail->Body = $texto;
	$mail->AltBody = $texto;
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
echo "<meta http-equiv='refresh' content='10;URL=http://localhost/teste/index_ajuda.php'>";
?>
