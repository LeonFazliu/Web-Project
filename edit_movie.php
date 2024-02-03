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
   
    $id = $_GET["id"];
    $title = $_POST["title"];
    $releaseDate = $_POST["release_date"];
    $genre = $_POST["genre"];

    
    $modifiedBy = $_SESSION["username"];

    $updateMovieQuery = "UPDATE filmat SET title='$title', release_date='$releaseDate', genre='$genre', modified_by='$modifiedBy' WHERE id=$id";

    if ($conn->query($updateMovieQuery) === TRUE) {
        echo "Filmi u ndryshua me sukses nga: " . $modifiedBy ;
    } else {
        echo "Gabim gjatë ndryshimit të filmi: " . $conn->error;
    }
} elseif (isset($_GET["id"])) {
   
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
    <nav>
        <a href="index.php">Home</a>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="list_movies.php">Shiko Filmat</a>
    </nav>
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
    <style>
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
    </style>
</body>
</html>