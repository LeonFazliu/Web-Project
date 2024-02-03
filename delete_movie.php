<?php
session_start();

if (isset($_GET["id"])) {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "filmatDB";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Lidhja me bazën e të dhënave ka dështuar: " . $conn->connect_error);
    }

    $id = $_GET["id"];
    $deleteMovieQuery = "DELETE FROM filmat WHERE id=$id";

    if ($conn->query($deleteMovieQuery) === TRUE) {
        echo "Filmi u fshi me sukses!";
        echo '<a href="list_movies.php">Kthehu tek filmat</a>';

    } else {
        echo "Gabim gjatë fshirjes së filmi: " . $conn->error;
    }

    $conn->close();
}
?>
