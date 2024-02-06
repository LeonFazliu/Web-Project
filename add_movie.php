<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "filmatDB";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Lidhja me bazën e të dhënave ka dështuar: " . $conn->connect_error);
    }

    $title = $_POST["title"];
    $releaseDate = $_POST["release_date"];
    $genre = $_POST["genre"];
    $filename = $_POST["filename"];

    $createdBy = $_SESSION["username"];

    $insertMovieQuery = "INSERT INTO filmat (title, release_date, genre, created_by, filename) VALUES ('$title', '$releaseDate', '$genre', '$createdBy','$filename')";

    if ($conn->query($insertMovieQuery) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gabim gjatë shtimit të filmi: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto Film</title>
</head>
<body>
    <h2>Shto Film</h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="list_movies.php">Shiko Filmat</a>
    </nav>
    <form action="add_movie.php" method="post">
    <label for="title">Titulli:</label>
        <input type="text" id="title" name="title" required>

        <label for="release_date">Data e Lirimit:</label>
        <input type="date" id="release_date" name="release_date" required>

        <label for="genre">Zhanri:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="genre">Filename:</label>
        <input type="text" id="filename" name="filename" required>

        <button type="submit">Shto Film</button>
    </form>

    <style>
             body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    color: #333;
}

nav {
    background-color: #333;
    padding: 10px;
    text-align: left;
}

nav a {
    color: #fff;
    text-decoration: none;
    padding: 5px 15px;
    margin: 0 10px;
    border-radius: 5px;
    background-color: #555;
}

nav a:hover {
    background-color: #777;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin: 10px 0;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>
</body>
</html>