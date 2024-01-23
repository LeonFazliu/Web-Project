<?php
// Nisni një sesion për të ruajtur informacionin e përdoruesit
session_start();

// Kontrollo nëse përdoruesi është kyçur
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Përformoni veprime specifike për rol (p.sh., shfaqeni për admin ose user)
$user_role = $_SESSION['user_role'];
$user_id = $_SESSION['user_id'];

// Lidhja me bazën e të dhënave (ndryshoni vlerat sipas bazës tuaj)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emri_i_databazes";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolloni lidhjen
if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave ka dështuar: " . $conn->connect_error);
}

// Merrni të dhënat e përdoruesit nga tabela e përdoruesve
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    $user_data = [];
}

// Mbyllja e lidhjes me bazën e të dhënave
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
    // Përfshijeni veprimet specifike për admin
} else {
    echo '<p>Mirësevini User ' . $user_data['username'] . '</p>';
    // Përfshijeni veprimet specifike për user
}
?>

<!-- Shtoni më shumë elemente në dashboard sipas nevojave tuaja -->

</body>
</html>