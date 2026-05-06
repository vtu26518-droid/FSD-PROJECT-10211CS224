<?php
include 'db.php';
$event_id = $_GET['event_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Event Registration</h2>

<form action="success.php" method="POST">
    <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
    
    <input type="text" name="student_name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    
    <input type="submit" value="Register">
</form>

</body>
</html>