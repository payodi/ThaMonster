<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Envoi du message à l'adresse e-mail de destination (à personnaliser)
    $to = "lolasubony@gmail.com";
    $subject = "Nouveau message de contact de $name";
    $headers = "From: $email";

    // Envoi du message
    mail($to, $subject, $message, $headers);

    // Redirection vers la page de remerciement (à personnaliser)
    header("Location: thankyou.html");
    exit();
}
?>
