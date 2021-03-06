<?php
$json = ['load' => true];
$params = [
	'name' => FILTER_SANITIZE_STRING,
	'email' => FILTER_VALIDATE_EMAIL,
	'phone' => FILTER_SANITIZE_STRING,
	'message' => FILTER_SANITIZE_STRING
];

$values = filter_input_array(INPUT_POST, $params);

if (empty($values['name']))
{
	$json = ['load' => true, 'error_message' => 'El nombre es requerido'];
}
else if (!$values['email'])
{
	$json = ['load' => true, 'error_message' => 'Debe poner un email válido'];
}
else if (empty($values['phone']))
{
	$json = ['load' => true, 'error_message' => 'El teléfono es requerido'];
}
else if (empty($values['message']))
{
	$json = ['load' => true, 'error_message' => 'Debe escribir su mensaje'];
}
else
{
	require 'mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.mandrillapp.com';
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'blue360peru@gmail.com';
		$mail->Password = 'pass';
		$mail->Port = 587;
		$mail->CharSet = 'UTF-8';

		$mail->From = $values['email'];
		$mail->FromName = $values['name'];
		$mail->addAddress('blue360peru@gmail.com', 'Blue360');
		$mail->addReplyTo('no-reply@blue360.com', 'Blue360');

		$mail->isHTML(true);

		$mail->Subject = 'Enviado desde la web de Blue360';
		$mail->Body    = nl2br('<br>Teléfono: </b>'.$values['phone'].'<br><br><hr>'.$values['message']);
		$mail->AltBody = $values['message'];

		if(!$mail->send()) {
			$json = ['load' => true, 'error_message' => 'El mensaje no pudo ser enviado, intentelo de nuevo, error: '.$mail->ErrorInfo];
		} else {
		    $json['success_message'] = 'Tu mensaje ha sido enviado';
		}
	} catch (phpmailerException $pex) {
		$json = ['load' => false, 'error_message' => $pex->getMessage()];
	}
}

echo json_encode($json);