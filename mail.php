<?php

require_once('assets/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['tel'];
$email = $_POST['email'];
$comment = $_POST['comment'];

//$mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'argon_service_viseu@mail.ru'; // логин от почты с которой будут отправляться письма
$mail->Password = 'a_Rg_on/service332'; // пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('argon_service_viseu@mail.ru'); // от кого будет уходить письмо
$mail->addAddress('143318@mail.ru'); // куда будет уходить письмо
$mail->isHTML(true);

$mail->Subject = 'Заявка с Argon Service Viseu';
$mail->Body    = '' . $name . ' оставил заявку, его телефон ' . $phone . '<br>Почта этого пользователя: ' . $email .
  '<br>Комментарий пользователя: ' . $comment;
$mail->AltBody = '';

if (!$mail->send()) {
  echo 'Error';
} else {
  echo ("<script>console.log('Obrigado!')</script>");
}
