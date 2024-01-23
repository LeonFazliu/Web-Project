<?php
session_start();

// Kontrollo nese perdoruesi eshte kyqur dhe ka rol user
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "user") {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Përdorues</title>
    <!-- Mund te shtoni stilet CSS ketu -->
</head>
<body>
    <h2>Miresevini, <?php echo $_SESSION["username"]; ?>! Ju keni te drejta përdoruesi.</h2>

    <!-- Opsionet dhe veprimet qe mund te beje nje përdorues -->
    <ul>
        <li><a href="#">Shiko Lajmet</a></li>
        <li><a href="#">Shiko Produktet</a></li>
        <li><a href="#">Na Kontaktoni</a></li>
        <li><a href="logout.php">Dil</a></li>
    </ul>

    <!-- Mund te shtoni pjeset tjera te Dashboard-it ketu -->
</body>
</html>