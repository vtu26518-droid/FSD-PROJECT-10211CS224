<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Registrations</h2>

<table border="1">
<tr>
    <th>Student Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Event ID</th>
</tr>

<?php
$sql = "SELECT * FROM registrations";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['student_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['event_id']}</td>
    </tr>";
}
?>

</table>

</body>
</html>