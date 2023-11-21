<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform validation or any processing of the form data here

    // For demonstration purposes, let's just display the received data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";

    // Here you can add code to save the form data to a database, send an email, etc.
} else {
    // If the form wasn't submitted via POST method, redirect back to the form page or handle the situation accordingly
    header("Location: your_form_page.php");
    exit();
}
?>
