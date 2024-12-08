<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Database Connection 
    $conn = new mysqli('localhost', 'root', '', 'hms');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO contactform (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $phone, $message);
        if ($stmt->execute()) {
            echo "We will contact you soon!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}
