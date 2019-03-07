<?php
if(isset($_POST['xml'])) {

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

}
?>
