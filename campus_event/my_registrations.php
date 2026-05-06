<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Registrations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Check Your Registered Events</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="submit" name="search" value="Search">
</form>

<?php
if(isset($_POST['search'])) {
    $email = $_POST['email'];

    $sql = "SELECT registrations.student_name, registrations.email, events.event_name, events.event_date, events.event_time, events.event_location 
            FROM registrations
            JOIN events ON registrations.event_id = events.id
            WHERE registrations.email = '$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Event</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
        </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['student_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['event_name']}</td>
                <td>{$row['event_date']}</td>
                <td>{$row['event_time']}</td>
                <td>{$row['event_location']}</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "No registrations found";
    }
}
?>

</body>
</html>