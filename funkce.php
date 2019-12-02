<?php
if(isset($_POST['name']) && !empty($_POST['name']))
    $name = htmlspecialchars(trim($_POST['name']));
if(isset($_POST['prijmeni']) && !empty($_POST['prijmeni']))
    $prijmeni = htmlspecialchars(trim($_POST['prijmeni']));
if(isset( $_POST['email']) && !empty($_POST['email']))
    $email = htmlspecialchars(trim($_POST['email']));
if(isset( $_POST['message']) && !empty($_POST['message']))
    $message = htmlspecialchars(trim($_POST['message']));
if(isset( $_POST['cislo']) && !empty($_POST['cislo']))
    $cislo = htmlspecialchars(trim($_POST['cislo']));

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
