<<<<<<< HEAD

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
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>

<style>
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="php/contact.php">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="emailing" class="form-control" placeholder="Your Email *" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" required>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="Submit">
                        </div>
                    </div>
                    
                </div>
            </form>
</div>
</body>
</html>
>>>>>>> ed9c073880ae38057c549ed6ae642a3e86ada41b
