<?php
    
    if(isset($_POST['submit'])){
        require 'php/PHPMailerAutoload.php';
        $mail = new PHPMailer

        $mail->='smtp.gmail.com'
        $mail->Port=587;
        $mail-SMTPAuth=true;
        $mail-SMTPSecure='tls';
        $mail-Username= 'jcool5848@gmail.com';
        $mail->Password='12345';

        $mail->setFrom($_POST['email'],$_POST['firstName'],($_POST['lastName'],$_POST['zipcode']);
        $mail->addAddress('jcool5848@gmail.com');
        $mail->addReplyTo($_POST['email'],($_POST['firstName'],($_POST['lastName']);
        $mail->isHTML(true);
        $mail->Subject='Form Submission: '.$_POST['subject'];
        $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>';

        if(!$mail->send()){
            $result='Something went wrong. Please try again.';
        }
        else{
            $result="Thank ".$_POST['name']." for contacting us. We'll get back with you soon!";
        }
    }
    ?>
    
