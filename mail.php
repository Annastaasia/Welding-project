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
$mail->Username = 'rudnevaketi@mail.ru'; // логин от почты с которой будут отправляться письма
$mail->Password = '!1q2w3e4r5t'; // пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('rudnevaketi@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('gomudusu@p33.org');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);

$mail->Subject = 'Заявка с Argon Service Viseu';
$mail->Body    = '' . $name . ' оставил заявку, его телефон ' . $phone . '<br>Почта этого пользователя: ' . $email .
  '<br>Комментарий пользователя: ' . $comment;
$mail->AltBody = '';

if (!$mail->send()) {
  echo 'Error';
} else {
  echo ("<script>console.log('Спасибо!')</script>");
  // header('location: thank-you.html');
}
