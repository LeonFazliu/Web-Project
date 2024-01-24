<!-- logout.php -->

<?php
session_start();

// Çkyçu dhe kthehu te faqja e hyrjes
session_destroy();
header("Location: login.php");
exit();
?>