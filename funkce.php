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

header('Content-Type: text/html; charset=utf-8');
$content="Od: $name $prijmeni \r\n Číslo: $cislo \r\n Email: $email \r\n Zpráva: $message";
$recipient = "lukic@arte-praha.cz";
$mailheader = "From: $email \r\n";
mail($recipient, $prijmeni, $content, $mailheader) or die("Chyba!");
?>