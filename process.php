<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = "your_email@gmail.com";
    $fromName = "Vision ";
    $name = $_POST["name"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $vehicleValue = $_POST["vehicleValue"];
    $vehicleType = $_POST["vehicleType"];
    $registration = $_POST["registration"];
    $coverType = $_POST["coverType"];
    $riskClassType = $_POST["riskClassType"];

    $to = "maxychege@gmail.com"; // Replace with your email address
    $subject = "New Commercial Truck Insurance Inquiry";
    $message = "Name: $name\n";
    $message .= "Phone Number: $phoneNumber\n";
    if (!empty($email)) {
        $message .= "Email: $email\n";
    }
    $message .= "Vehicle Value (KShs.): $vehicleValue\n";
    $message .= "Vehicle Type: $vehicleType\n";
    $message .= "Registration: $registration\n";
    $message .= "Cover Type: $coverType\n";
    $message .= "Risk Class Type: $riskClassType\n";

    // Send the email
    mail($to, $subject, $message);

    // Redirect to the checkout page
    header("Location: checkout.html");
    exit();
}
?>
