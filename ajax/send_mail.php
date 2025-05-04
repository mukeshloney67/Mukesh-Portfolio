<?php
require '../smtp/PHPMailerAutoload.php';
if (isset($_POST['home_contact'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $message = $_POST['message'];


    $html = "First Name :- $first_name <br> Last Name :- $last_name <br> Message :- $message";


    echo smtp_mailer('mkloneyrr67@gmail.com', 'Contact Request', $html);
}

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->Username = "loneymukesh51@gmail.com";
   
    $mail->SetFrom("loneymukesh51@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);

    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ));

    if (!$mail->Send()) {
        return $mail->ErrorInfo;
    } else {
        return 'Sent';
    }
}
?>
