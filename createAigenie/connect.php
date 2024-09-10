
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo"hello";
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'u586310796_digitalinnovat', 'Digital321#@', '');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO conatct (fullName, email, phone, message) VALUES (?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssis", $fullName, $email, $phone, $message);

    // Execute the statement
    $stmt->execute();

    // Check if the statement was executed successfully
    if ($stmt->affected_rows > 0) {
        echo "Registration successful";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
    // Close the connection
    $conn->close();
}
?>
