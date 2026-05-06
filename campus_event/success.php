<?php
include 'db.php';

$name = $_POST['student_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event_id = $_POST['event_id'];

$sql = "INSERT INTO registrations (student_name, email, phone, event_id)
        VALUES ('$name', '$email', '$phone', '$event_id')";

if(mysqli_query($conn, $sql)) {
    echo "<h2>Registration Successful!</h2>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>