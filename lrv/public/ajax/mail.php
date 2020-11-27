<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require __DIR__ . '\..\..\vendor\autoload.php';
foreach (glob("phpmailer/*.php") as $filename) {
    include_once $filename;
}
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$info = $_POST['info'];
echo $email;
    // $subject = "=?utf-8?B?".base64_encode("Message from site")."?=";
    // $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf8\r\n";
    // $success = mail("bassarov_01@mail.ru", $subject, $info, $headers);
    // echo $success;



$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'john.doe.2005@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '110azamat'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('john.doe.2005@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('dosbolbakhtiyar@gmail.com');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email.'<br>Сообщение:'.$info;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
    setcookie('lox', "lox");
} else {
    echo "Message is sent!";
    header("Location: thank-you.html");
}
