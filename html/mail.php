<?php
if(isset( $_POST['name'])) {
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$honeypot = $_POST['firstname'];
// $url = 'https://www.google.com/recaptcha/api/siteverify';

$mailTo = "band@lamegenie.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

if( ! empty( $honeypot ) ){
    header("Location: index.html?mailfail");
} else {

    header("Location: index.html?mailsend");
    mail($mailTo, $subject, $txt, $headers);
}
    // $secretKey = "6LdIu_cUAAAAAAJ0S96I6YuzijLfqxjOriOzDabb";
    // $responseKey = $_POST['g-recaptcha-response'];
    // $UserIP = $_SERVER['REOMTE_ADDR'];
    // $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

    // $response = file_get_contents($url);
    // $response = json_decode($response);

    // if ($response->success){
    // header("Location: index.html?mailsend");
    // mail($mailTo, $subject, $txt, $headers);
    // // echo "Message sent successfully";
    // } else {

    // }


} 
?>