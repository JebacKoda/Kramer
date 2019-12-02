<?php
mb_internal_encoding("UTF-8");

if  (! $_POST) {
    return
}

$email = [];

if(isset($_POST['name']) && ! empty($_POST['name'])) {
    $email['name'] = htmlspecialchars(trim($_POST['name']));
}

if(isset($_POST['prijmeni']) && ! empty($_POST['prijmeni'])) {
    $email['prijmeni'] = htmlspecialchars(trim($_POST['prijmeni']));
}

if(isset( $_POST['email']) && ! empty($_POST['email'])) {
    $email['email'] = htmlspecialchars(trim($_POST['email']));
}

if(isset( $_POST['message']) && ! empty($_POST['message'])) {
    $email['message'] = htmlspecialchars(trim($_POST['message']));
}

if(isset( $_POST['cislo']) && ! empty($_POST['cislo'])) {
    $email['cislo'] = htmlspecialchars(trim($_POST['cislo']));
}

$subject = "Email z kramer-nakladace";

$headers = []
$headers[] = "MIME-Version: 1.0" . "\r\n";
$headers[] = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers[] = "Content-Transfer-Encoding: 8-bit";
$content = "Od: " . $email['name'] . $email['prijmeni'] . "\r\n Číslo: " . $email['cislo'] . "\r\n Email: " . $email['email'] . "\r\n Zpráva: " . $email['message'];
$recipient = "info@kramer-nakladace.cz";

if(mail($recipient, $subject, $content, $headers)) {
    echo "<script>
         alert('Email úspěšně zaslán');
         window.location.href= \"https://kramer-nakladace.cz\";
          </script>";
}
?>
