<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail -> isSMTP();
        $mail -> Host = "smtp.gmail.com";
        $mail -> SMTPAuth = true;
        $mail -> Username = "seedscout02@gmail.com";
        $mail -> Password = "cbmy pyuy peby trse";
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail -> Port = 587;

        $mail -> setFrom("seedscout02@gmail.com", "seedscout");
        $mail -> addAddress("seedscout02@gmail.com", "seedscout");

        $mail -> Subject = "New Feedback Form Submission";
        $mail -> Body = "Name: $name\n".
                        "Email: $email\n".
                        "Message: $message";
        if($mail -> send()){
            header("Location:thankyou.html");
            exit();
        }else{
            echo "Message could not be sent, Error: " . $mail->ErrorInfo; 
        }

    } catch (Exception $e) {
        echo "Message could not be sent, Error: " . $mail->ErrorInfo; 
    }
    
}
?>