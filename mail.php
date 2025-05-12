<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $to = "peter@example.com";  // Pas dit aan naar Peter's echte e-mailadres
    $subject = "Nieuwe bestelling via website";
    $message = "Er is een nieuwe bestelling geplaatst voor: " . $product;
    $headers = "From: noreply@peterswebsite.nl";
    mail($to, $subject, $message, $headers);
    echo "Mail verzonden";
}
?>
