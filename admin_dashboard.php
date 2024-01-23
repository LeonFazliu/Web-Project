<?php
session_start();

// Kontrollo nese perdoruesi eshte kyqur dhe ka rol admin
// Kontrollo nese perdoruesi eshte kyqur dhe ka rol admin
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Administrator</title>
    <!-- Mund te shtoni stilet CSS ketu -->
</head>
<body>
    <h2>Miresevini, <?php echo $_SESSION["username"]; ?>! Ju keni te drejta administratori.</h2>

    <!-- Opsionet dhe veprimet qe mund te beje nje administrator -->
    <ul>
        <li><a href="#">Menaxho PÃ«rdoruesit</a></li>
        <li><a href="#">Menaxho Produktet</a></li>
        <li><a href="#">Raportet</a></li>
        <li><a href="logout.php">Dil</a></li>
    </ul>

    <!-- Mund te shtoni pjeset tjera te Dashboard-it ketu -->
</body>
</html>