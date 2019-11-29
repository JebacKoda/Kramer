<?php
if(isset( $_POST['name']))
    $name = $_POST['name'];
if(isset( $_POST['prijmeni']))
    $prijmeni = $_POST['prijmeni'];
if(isset( $_POST['email']))
    $email = $_POST['email'];
if(isset( $_POST['message']))
    $message = $_POST['message'];
if(isset( $_POST['cislo']))
    $cislo = $_POST['cislo'];

$subject = "Email z kramer-nakladace";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$content = "Od: $name $prijmeni \r\n Číslo: $cislo \r\n Email: $email \r\n Zpráva: $message";
$recipient = "info@kramer-nakladace.cz";

if(mail($recipient,$subject, $content, $headers)) {
    echo "<script>
         alert('Email úspěšně zaslán');
         window.location.href= \"https://kramer-nakladace.cz\";
          </script>";
}
?>