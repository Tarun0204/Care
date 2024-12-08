<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST["gender"];
    $phone = $_POST['phone'];

    // Database Connection 
    $conn = new mysqli('localhost', 'root', '', 'hms');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO appointmentform (name, email, gender, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $email, $gender, $phone);
        if ($stmt->execute()) {
            echo "Your Appointment is Successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}
