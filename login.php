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
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"]; 
 
 $selectAdminQuery = "SELECT * FROM admin WHERE username = '$username'";

 
 $selectUserQuery = "SELECT * FROM users WHERE username = '$username'";


 $finalQuery = "($selectAdminQuery) UNION ($selectUserQuery)";

 $result = $conn->query($finalQuery);

 if ($result->num_rows == 1) {
     $row = $result->fetch_assoc();
     if (password_verify($password, $row["password"])) {
         $_SESSION["username"] = $username;
         $_SESSION["role"] = $row["role"];

         if ($_SESSION["role"] === "admin") {
             header("Location: admin_dashboard.php");
         } else {
             header("Location: index.php");
         }
     } else {
         echo "Fjalëkalimi i pasaktë!";
     }
 } else {

     echo "Përdoruesi nuk ekziston. <a href='register.php'>Regjistrohu këtu</a>.";
 }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    
    <div class="form-wrapper">
        <h2>Sign in</h2>
        <form action="login.php" method="post" id="loginForm"  onsubmit="return validateLoginForm()">
            <div class="form-control">
                <input type="text" id="username" name="username" required>
                <label for="username">Username</label>
                <span id="usernameError" class="error-message"></span>
            </div>
            <div class="form-control">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
                <span id="passwordError" class="error-message"></span>
            </div>
            <button type="submit">Sign in</button>
        </form>
        <p>New to Movies24Online?   <a href="register.php">Sign up now</a></p>
    </div>

    <script>
    function validateLoginForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        document.getElementById('usernameError').innerText = '';
        document.getElementById('passwordError').innerText = '';

        var usernameRegex = /^[A-Z][a-z]*$/;

        if (!username || !usernameRegex.test(username)) {
            document.getElementById('usernameError').innerText = 'Please enter a valid Name.';
            return false;
        }

        var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

        if (!password || !passwordRegex.test(password)) {
            document.getElementById('passwordError').innerText = 'Invalid Password';
            return false;
        }

        return true;
    }
</script>
</body>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
.error-message{
    color: red;
}
body {
    background: #000;
}

body::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0.5;
    width: 100%;
    height: 100%;
    background: url("hero-img.jpg");
    background-position: center;
}

nav {
    position: fixed;
    padding: 25px 60px;
    z-index: 1;
}

nav a img {
    width: 167px;
}

.form-wrapper {
    position: absolute;
    left: 50%;
    top: 50%;
    border-radius: 4px;
    padding: 70px;
    width: 450px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .75);
}

.form-wrapper h2 {
    color: #fff;
    font-size: 2rem;
}

.form-wrapper form {
    margin: 25px 0 65px;
}

form .form-control {
    height: 50px;
    position: relative;
    margin-bottom: 16px;
}

.form-control input {
    height: 100%;
    width: 100%;
    background: #333;
    border: none;
    outline: none;
    border-radius: 4px;
    color: #fff;
    font-size: 1rem;
    padding: 0 20px;
}

.form-control input:is(:focus, :valid) {
    background: #444;
    padding: 16px 20px 0;
}

.form-control label {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1rem;
    pointer-events: none;
    color: #8c8c8c;
    transition: all 0.1s ease;
}

.form-control input:is(:focus, :valid)~label {
    font-size: 0.75rem;
    transform: translateY(-130%);
}

form button {
    width: 100%;
    padding: 16px 0;
    font-size: 1rem;
    background: #e50914;
    color: #fff;
    font-weight: 500;
    border-radius: 4px;
    border: none;
    outline: none;
    margin: 25px 0 10px;
    cursor: pointer;
    transition: 0.1s ease;
}

form button:hover {
    background: #c40812;
}

.form-wrapper a {
    text-decoration: none;
}

.form-wrapper a:hover {
    text-decoration: underline;
}

.form-wrapper :where(label, p, small, a) {
    color: #b3b3b3;
}

form .form-help {
    display: flex;
    justify-content: space-between;
}

form .remember-me {
    display: flex;
}

form .remember-me input {
    margin-right: 5px;
    accent-color: #b3b3b3;
}

form .form-help :where(label, a) {
    font-size: 0.9rem;
}

.form-wrapper p a {
    color: #fff;
}

.form-wrapper small {
    display: block;
    margin-top: 15px;
    color: #b3b3b3;
}

.form-wrapper small a {
    color: #0071eb;
}

@media (max-width: 740px) {
    body::before {
        display: none;
    }

    nav, .form-wrapper {
        padding: 20px;
    }

    nav a img {
        width: 140px;
    }

    .form-wrapper {
        width: 100%;
        top: 43%;
    }

    .form-wrapper form {
        margin: 25px 0 40px;
    }
}
</style>
</html>