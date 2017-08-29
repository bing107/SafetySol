<?php

require("class.phpmailer.php");
/*require("class.smtp.php");*/

if(isset($_POST['submit']))
{
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $email   = $_POST['email'];

    $items   = $_POST['items'];
    $itemsImplode = implode("," , $items);

    $descrip = $_POST['descrip'];

    require("PHPMailerAutoload.php");

    $mail = new PHPMailer();
    $mail->SMTPSecure = 'tls';
    $mail->Username = "safetysolweb@outlook.com";
    $mail->Password = "safety101";
    $mail->AddAddress('talhaiqbalsyed@hotmail.com');
    $mail->FromName = "Safety Solution Web";
    $mail->Subject = "Your Order";
    $mail->Body = "Dear Sir/Madam," . "\r\n" .
                  "Your Order Detail Are: ". "\r\n" .
                  "Name: ".$name." \r\n" .
                  "Contact Number: ".$phone." \r\n" .
                  "Email: ".$email." \r\n" .
                  "Items: ".$itemsImplode." \r\n" .
                  "Description: ".$descrip;
    $mail->Host = "smtp.live.com";
    $mail->Port = 587;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->From = $mail->Username;

    /*echo "name: ".$name;
    echo " phone: ".$phone;
    echo " email: ".$email;
    echo " items: ".$itemsImplode;
    echo " descrip: ".$descrip;

    exit();*/

    if(!$mail->Send()) {
        echo "<script>window.alert('Mailer Error: ');".$mail->ErrorInfo."window.location.href = '../index.html';</script>";
    } else {
        echo "<script>window.alert('Your Mail Is Sent To Admin.\\nWait for confirmation mail or call.\\nThanks');
        window.location.href = '../index.php';</script>";
    }
}

?>
