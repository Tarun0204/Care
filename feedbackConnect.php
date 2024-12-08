<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $department = $_POST['department'];
    $feedback = $_POST['feedback'];

    // Database Connection 
    $conn = new mysqli('localhost', 'root', '', 'hms');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO feedbackform (name, email, location, department, feedback) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $location, $department, $feedback);
        if ($stmt->execute()) {
            echo "Feedback Sent Successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}
