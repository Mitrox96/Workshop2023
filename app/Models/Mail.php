<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


class Mail extends Model{

    public static function checkMail($post) {
        $db = self::db();
        $qry = "SELECT email
                FROM Utilisateur
                WHERE email = :email";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':email' => $post['email']
        ]);
        if ($stt->rowCount() === 0){
            return false;
        }
        return true;
    }

    public static function ForgotPasswordMail($post, $token) {
        $mail = new PHPMailer();
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'william.andre@ecoles-epsi.net';
            $mail->Password = '!Epsi2023Workshop';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
    
            //Recipients
            $mail->setFrom('william.andre@ecoles-epsi.net');
            $mail->addAddress($post['mail']);     //Add a recipient
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Mot de passe oublié';
            $mail->Body = 'Pour votre nouveau mot de passe veuillez cliquer sur l\'adresse ci-dessous : <br><br>
                            . ' . $_ENV['APP_URL'] . '/new-password?token=' . $token . ' <br><br>
                            Si ce message ne vous est pas destiné, veuillez l\'ignorer.' ;
    
            $mail->send();
            return 'Le message à bien été envoyé !';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}