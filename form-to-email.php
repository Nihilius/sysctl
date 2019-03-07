
// Using Awesome https://github.com/PHPMailer/PHPMailer
<?php
require 'PHPMailerAutoload.php';
$xml = $_POST['xml']; // required
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
//$Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = false;                               // Enable SMTP authentication
//$mail->Username = 'postmaster@YOUR_DOMAIN_NAME';   // SMTP username
//$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

$mail->From = 'sys@sysctl.heroku.app';
$mail->FromName = 'SysCtl';
$mail->addAddress('bvelicsw@gmail.com, brandon.velic@sherwin.com, adam.tomson@sherwin.com');                 // Add a recipient

$mail->WordWrap = 100;                                 // Set word wrap to 50 characters

$mail->Subject = 'Sys-Ctl Distribution Request';
$mail->Body    = $xml;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}







<?php
/*if(isset($_POST['xml'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bvelicsw@gmail.com, brandon.velic@sherwin.com, adam.tomson@sherwin.com";
    $email_subject = "Sys-ctl";



    $xml = $_POST['xml']; // required

    $string_exp = "/^[A-Za-z .'-]+$/";

    $email_message = "Form xml details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Sys-Ctl \n".clean_string($xml)."\n";



// create email headers
$headers = 'From: SysCtl'."\r\n".
'Reply-To: help desk' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

?>


<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.

<?php

}*/
?>
