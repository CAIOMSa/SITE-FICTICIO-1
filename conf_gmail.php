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
	$mail->Username = '013472010@eniac.edu.br';
	$mail->Password = '013472010';
	$mail->Port = 587;
 
	$mail->setFrom('013472010@eniac.edu.br');
	$mail->addAddress('caiosaes@gmail.com');
 
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
echo "<meta http-equiv='refresh' content='10;URL=http://localhost/teste_projetoexemplar/projeto_exemplar/index_ajuda.htm'>";
?>