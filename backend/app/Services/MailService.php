<?php
/**
 * Created by PhpStorm.
 * User: Karol Golec
 * Date: 22.08.2016
 * Time: 08:07
 */

namespace App\Services;
use App\Services\LogService;
use PHPMailer;


class MailService
{
    public function sendFromContact() {
        if (isset($_POST["firstName"]) && isset($_POST["phone"]) && isset($_POST["hours"])){
            $firstName = htmlspecialchars($_POST["firstName"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $hours = htmlspecialchars($_POST["hours"]);

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = getenv('MAIL_USERNAME');
            $mail->Password = getenv('MAIL_PASSWORD');
            $mail->setFrom('kargolsan@gmail.com', 'wozki-sadownicze.pl');
            $mail->addReplyTo('noreply@gmail.com', 'No-reply');
            $mail->addAddress('sklep@sagrol.pl', 'wozki-sadownicze.pl');
            $mail->Subject = 'Wiadomosc wyslana ze strony wozki-sadownicze.pl';
            $mail->msgHTML(sprintf("Klient %s prosi o kontakt na numer telefonu %s w godzinach %s", $firstName, $phone, $hours));
            if (!$mail->send()) {
                LogService::warning($mail->ErrorInfo);
                echo "ERROR";
            } else {
                echo "OK";
            }
        }
    }
}