<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Available Events</h2>

<table border="1" align="center">
<tr>
    <th>Event Name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Location</th>
    <th>Register</th>
</tr>

<?php
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['event_name']}</td>
        <td>{$row['event_date']}</td>
        <td>{$row['event_time']}</td>
        <td>{$row['event_location']}</td>
        <td><a href='register.php?event_id={$row['id']}'>Register</a></td>
    </tr>";
}
?>

</table>
</body>
</html>