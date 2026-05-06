<?php
include 'db.php';

if(isset($_POST['add_event'])) {
    $name = $_POST['event_name'];
    $date = $_POST['event_date'];
    $time = $_POST['event_time'];
    $location = $_POST['event_location'];

    $sql = "INSERT INTO events (event_name, event_date, event_time, event_location)
            VALUES ('$name', '$date', '$time', '$location')";
    mysqli_query($conn, $sql);
    echo "Event Added Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Admin Panel - Add Event</h2>

<form method="POST">
    <input type="text" name="event_name" placeholder="Event Name" required>
    <input type="date" name="event_date" required>
    <input type="time" name="event_time" required>
    <input type="text" name="event_location" placeholder="Location" required>
    <input type="submit" name="add_event" value="Add Event">
</form>

<br>
<a href="view_registrations.php">View Registrations</a>

</body>
</html>