
<?php  


    $name=$_POST['name'];
    $emailing=$_POST['emailing'];
    $message=$_POST['message'];
    $submit=$_POST['submit'];

     use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {

    $mail ->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'pycodecamp47@gmail.com';                    
    $mail->Password   = 'nrgsjiulrjonaxjp';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                   

    //Recipients
    $mail->setFrom('pycodecamp47@gmail.com','PyCodeCamp');
    $mail->addAddress('pycodecamp47@gmail.com');   
    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');        
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 

    //Content
    $mail->isHTML(true);                               
    $mail->Subject = 'Message Arrieved';
    $mail->Body    = 
    "<span style=' color:red;  font-weight: 200;font-size:20px;'>Name: </span>"."<span style='font-size:20px;'>".$name ."</span>"."<br><br>".
     "<span style=' color:red;  font-weight: 200;font-size:20px;'>Email: </span>"."<span style='font-size:20px;'>".$emailing ."</span>"."<br><br>" . 
      "<span style=' color:red;  font-weight: 200;font-size:20px;'>Message: </span>"."<span style='font-size:20px;'> <br>".$message ."</span>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($submit){
        echo "<script>alert('Well Done $name, your message has been received.')</script>";
        echo "<script>window.open('../index.html', '_self')</script>";
    }
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>