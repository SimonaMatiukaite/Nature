<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php



      // print_r($_GET);
      // $klientoVardas = $_GET['name'];
      // $klientoElPastas = $_GET['email'];
      // $klientoKlausimas = $_GET['message'];



      require_once 'email/lib/PHPMailer-master/PHPMailerAutoload.php';


      $mail = new PHPMailer;


      $mail->SMTPDebug = 0;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'pastastestas@gmail.com';                 // SMTP username
      $mail->Password = '';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to


      $mail->setFrom('pastastestas@gmail.com', 'testuotojas');
      $mail->addAddress('pastastestas@gmail.com', 'Simona');     // Add a recipient
      // $mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('pastastestas@gmail.com',  'taip');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML


      $mail->Subject = "Question from: $klientoVardas";
      $mail->Body    = '<h1>Question</h1> <b>1) </b>';
      $mail->AltBody = 'text \n : What is the purpose...?';
      $mail->Body    = $klientoKlausimas . "test body";
      $mail->AltBody = $klientoKlausimas;


      if(!$mail->send()) {
          echo 'The dog is still missing. Keep looking';
          echo 'Error ' . $mail->ErrorInfo;
      } else {
          echo 'Congrats! The dog was found!';
      }





    ?>

  </body>
</html>
