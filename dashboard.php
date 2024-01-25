<?php

session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


$user_role = $_SESSION['user_role'];
$user_id = $_SESSION['user_id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emri_i_databazes";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave ka dështuar: " . $conn->connect_error);
}


$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    $user_data = [];
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<?php
if ($user_role === 'admin') {
    echo '<p>Mirësevini Admin ' . $user_data['username'] . '</p>';
    
} else {
    echo '<p>Mirësevini User ' . $user_data['username'] . '</p>';
    
}
?>



</body>
</html>