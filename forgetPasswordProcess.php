<?php

include "connection.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$email = $_POST["e"];
$vcode = uniqid();

$rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."'");
$num = $rs->num_rows;

if ($num > 0) {
    
    Database::iud("UPDATE `user` SET `v_code` = '".$vcode."' WHERE `email` = '".$email."'");

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'jpriyaman@gmail.com';                     //SMTP username
        $mail->Password = 'qqhbbxzvwnnkhxps';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('jpriyaman@gmail.com', 'Online Store');
        $mail->addAddress($email);     //Add a recipient
        $mail->addReplyTo('info@example.com', 'Information');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset your account password';
        $mail->Body = '<table style="width: 100%; font-family: sans-serif;">
        <tbody>
            <tr>
                <td align="center">
                    <table style="max-width: 600px;">
    
                        <tr>
                            <td align="center">
                                <a href="#" style="font-size: 35px; font-weight: bold; color: black; text-decoration: none;">Online Store</a>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <h1 style="font-size: 25px; line-height: 45px; font-weight: 600;">Reset Your Password</h1>
                                <p style="margin-bottom: 24px;">You can change your password by clicking the button below.</p>
                                <div>
                                    <a href="http://localhost/HEXASHOP/resetPassword.php?vcode='.$vcode.'" style="text-decoration: none; display: inline-block; border-radius: 8px; background-color: blue;
                                    color: white; padding: 15px;">
                                        <span>Reset Password</span>
                                    </a>
                                </div>
                                <p style="margin-top: 24px;">If you didn\'t ask to reset your password, you can ignore this email.</p>
                                <hr>
                            </td>
                        </tr>
    
                        <tr>
                            <td align="center">
                                <p style="font-weight: 500;">&copy; 2024 HEXASHOP.lk || All Rights Reserved</p>
                            </td>
    
                        </tr>
    
                    </table>
                </td>
            </tr>
        </tbody>
    </table>';

        $mail->send();
        echo 'Success';
    } catch (Exception $email) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    echo ("User Not Found Please Check Your Email");
}


?>