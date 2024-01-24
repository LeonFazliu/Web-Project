<?php
session_start();

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "filmatDB";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave ka dështuar: " . $conn->connect_error);
}

$id = null;
$title = "";
$releaseDate = "";
$genre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["id"])) {
    // Pjesa për procesimin e formës pasi të jetë dorëzuar
    $id = $_GET["id"];
    $title = $_POST["title"];
    $releaseDate = $_POST["release_date"];
    $genre = $_POST["genre"];

    $updateMovieQuery = "UPDATE filmat SET title='$title', release_date='$releaseDate', genre='$genre' WHERE id=$id";

    if ($conn->query($updateMovieQuery) === TRUE) {
        echo "Filmi u ndryshua me sukses!";
    } else {
        echo "Gabim gjatë ndryshimit të filmi: " . $conn->error;
    }
} elseif (isset($_GET["id"])) {
    // Pjesa për marrjen e informacionit të filmit për të treguar në formë
    $id = $_GET["id"];
    $selectMovieQuery = "SELECT * FROM filmat WHERE id=$id";
    $result = $conn->query($selectMovieQuery);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $releaseDate = $row["release_date"];
        $genre = $row["genre"];
    } else {
        echo "Filmi nuk u gjet!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ndrysho Film</title>
</head>
<body>
    <h2>Ndrysho Film</h2>
    <form action="edit_movie.php?id=<?php echo $_GET["id"]; ?>" method="post">
        <label for="title">Titulli:</label>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>" required>

        <label for="release_date">Data e Lirimit:</label>
        <input type="date" id="release_date" name="release_date" value="<?php echo $releaseDate; ?>" required>

        <label for="genre">Zhanri:</label>
        <input type="text" id="genre" name="genre" value="<?php echo $genre; ?>" required>

        <button type="submit">Ndrysho Film</button>
    </form>
</body>
</html>