<?php
include 'PHPMailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$phone = $_POST['phone'];





// allow for demo mode testing of emails
define("DEMO", false); // setting to TRUE will stop the email from sending.

$templates_file = file_get_contents("../templates/contact__template.php");

// set the email 'from' information
$email_from = "Colegio Graneros - Contactos <wilkenstech@gmail.com>";

// create a list of the variables to be swapped in the html template
$swap_var = array(
    "{SITE_ADDR}" => "https://www.colegiograneros.cl",
    "{EMAIL_LOGO}" => "https://colegiograneros.cl/Inventario/img/logo/log.png",
    "{EMAIL_TITLE}" => "Mensaje desde el sitio web",
    "{CUSTOM_URL}" => "https://colegiograneros.cl/",
    "{CUSTOM_IMG}" => "",
    "{TO_NAME}" => $name,
    "{TO_EMAIL}" => $email,
    "{FROM_NAME}" => $name,
    "{EMAIL}" => $email,
    "{PHONE}" => $phone,
    "{MESSAGE}" => $message
);

// create the email headers to being the email
$email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
$email_headers .= "MIME-Version: 1.0\r\n";
$email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// load the email to and subject from the $swap_var
$email_to ="mwforlife24@gmail.com";
$email_subject = $swap_var['{EMAIL_TITLE}']; // you can add time() to get unique subjects for testing: time();

$email_message = $templates_file;

// search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
foreach (array_keys($swap_var) as $key){
    if (strlen($key) > 2 && trim($swap_var[$key]) != '')
        $email_message = str_replace($key, $swap_var[$key], $email_message);
}

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "mail.colegiograneros.cl";
$mail->Port = 465;
$mail->Username = "contacto@colegiograneros.cl";
$mail->Password = "informatica2022";
$mail->From = "contacto@colegiograneros.cl";
$mail->FromName = "Colegio Graneros | Contacto";
$mail->Subject = "Contacto Desde la Web";
$mail->Body = $email_message;
$mail->AddAddress("contacto@colegiograneros.cl", "Contacto - Colegio Graneros");
$mail->IsHTML(true);
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";


// check if the email script is in demo mode, if it is then dont actually send an email
if (DEMO){
    die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");
}
// send the email out to the user  
    /*if (mail($email_to, $email_subject, $email_message, $email_headers)){
        echo 1;
    } else {
        echo "The email message was not sent.";
    }*/

    if ($mail->send()) {
        echo 1;
    }else{
        echo "The email message was not sent.";
    }