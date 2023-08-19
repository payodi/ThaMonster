<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $language = $_POST["language"];
    $subscribe = isset($_POST["subscribe"]) ? "Oui" : "Non";

    $to = "lolasubony@gmail.com"; // Adresse e-mail de destination
    $subject = "Nouvelle inscription à la newsletter";
    $message = "Nouvelle inscription à la newsletter :\n\n";
    $message .= "Adresse e-mail : $email\n";
    $message .= "Langue : $language\n";
    $message .= "Abonnement à la newsletter : $subscribe\n";

    // Envoi de l'e-mail
    mail($to, $subject, $message);

    // Redirection vers la page de remerciement (à personnaliser)
    header("Location: newsthx.html");
    exit();
}
?>
