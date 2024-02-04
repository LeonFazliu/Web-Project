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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($role == "admin") {
        $insertAdminQuery = "INSERT INTO admin (username, password, role) VALUES ('$username', '$hashedPassword', '$role')";
        if ($conn->query($insertAdminQuery) === TRUE) {
            header("Location: admin_dashboard.php");
        } else {
            echo "Gabim gjatë regjistrimit të adminit: " . $conn->error;
        }
    } else {
        $insertUserQuery = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashedPassword', '$role')";
        if ($conn->query($insertUserQuery) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Gabim gjatë regjistrimit të përdoruesit: " . $conn->error;
        }
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
        <h2>Sign up</h2>
        <form id="signupForm" action="register.php" method="post" onsubmit="return validateForm()">
            <div class="form-control">
                <input type="text" name="username" id="username" required>
                <label>Full name</label>
                <span id="usernameError" class="error-message"></span>
            </div>
          
            <div class="form-control">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
                <span id="passwordError" class="error-message"></span>
            </div>
            <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
            <button type="submit" >Sign up</button>
            
        </form>
        <p>Already have an Account?   <a href="login.php">Sign in now</a></p>
    </div>

    <script>
        function validateForm() {
            var fullName = document.getElementById('username').value;
           
            var password = document.getElementById('password').value;

            document.getElementById('usernameError').innerText = '';
     
            document.getElementById('passwordError').innerText = '';

            
            

            
            var fullNameRegex = /^[A-Z][a-z]*$/;

            if (!fullName || !fullNameRegex.test(fullName)) {
                document.getElementById('usernameError').innerText = 'Please enter a valid Name.';
                return false;
            }

            

            
            var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

            if (!password || !passwordRegex.test(password)) {
                document.getElementById('passwordError').innerText = 'Please enter a valid password.';
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
    }</style>
</html>