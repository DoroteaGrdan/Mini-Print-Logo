<?php
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $naslov = $_POST['naslov'];
    $poruka = $_POST['poruka'];

$email_od = 'verginiaidk@gmail.com';
$email_naslov = 'Nova poruka';
$email_tijelo = "Korisničko ime: $ime.\n".
                "Korisnički račun: $email.\n".
                "Naslov: $naslov.\n".
                "Poruka: $poruka.\n";

$za = "doroteagrdan@gmail.com";
$headers = "Od: $email_od \r\n";
$headers .= "Odgovori: $email \r\n";

mail($za,$email_naslov,$email_tijelo);

header("location: kontakt.html");

?>