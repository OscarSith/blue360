<?php
/**
 * Created by PhpStorm.
 * User: oscarlarriega
 * Date: 25/05/17
 * Time: 2:45 PM
 */
$params = [
	'email' => FILTER_VALIDATE_EMAIL,
	'name' => FILTER_SANITIZE_STRING,
	'subject' => FILTER_SANITIZE_STRING
];

$values = filter_input_array(INPUT_GET, $params);

require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

try {
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.mandrillapp.com';
	$mail->SMTPSecure = 'tls';
	$mail->Username = 'blue360peru@gmail.com';
	$mail->Password = 'pass';
	$mail->Port = 587;
	$mail->CharSet = 'UTF-8';

	$mail->From = 'larriega@gmail.com';
	$mail->FromName = 'Oskiii...';
	$mail->addAddress($values['email'], $values['name']);
	$mail->addReplyTo('no-reply@blue360.com', 'Blue360');

	$mail->isHTML(true);

	$mail->Subject = $values['subject'];
	$mail->Body    = file_get_contents('client-welcome.html');

	if(!$mail->send()) {
		$json = ['load' => true, 'error_message' => 'El mensaje no pudo ser enviado, intentelo de nuevo, error: '.$mail->ErrorInfo];
	} else {
		$json['success_message'] = 'Mensaje enviado';
	}
} catch (phpmailerException $pex) {
	$json = ['load' => false, 'error_message' => $pex->getMessage()];
}

echo json_encode($json);