
<?php

$xml = $_POST['xml']; // required
// If you are not using Composer (recommended)
 require("sengrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "SysCtl");
$subject = "Sys-Ctl Distribution Request";
$to = new SendGrid\Email(null, "bvelicsw@gmail.com, brandon.velic@sherwin.com");
$content = new SendGrid\Content("text/plain", $xml);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();


?>
Thank you for contacting us. We will be in touch with you very soon.



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
