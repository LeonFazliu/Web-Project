<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Signup</title>
  <link rel="stylesheet" href="logreg.css" />
  <style>
    .error-message {
      color: black;
    }
  </style>
</head>

<body>
  <section class="wrapper">
    <div class="form signup">
      <header>Signup</header>
      <form onsubmit="return validateSignupForm()">
        <input type="text" id="fullName" placeholder="Full name" required />
        <div id="fullNameError" class="error-message"></div>

        <input type="text" id="signupEmail" placeholder="Email address" required />
        <div id="signupEmailError" class="error-message"></div>

        <input type="password" id="signupPassword" placeholder="Password required" required />
        <div id="signupPasswordError" class="error-message"></div>

        <div class="checkbox">
          <input type="checkbox" id="signupCheck" required />
          <label for="signupCheck">I accept all terms & condition</label>
        </div>
        <input type="submit" value="Signup" />
      </form>
    </div>

    <div class="form login">
      <header>Login</header>
      <form onsubmit="return validateLoginForm()">
        <input type="text" id="loginEmail" placeholder="Email address" required />
        <div id="loginEmailError" class="error-message"></div>

        <input type="password" id="loginPassword" placeholder="Password" required />
        <div id="loginPasswordError" class="error-message"></div>

        <input type="submit" value="Login" />
      </form>
    </div>

    <script>
      const wrapper = document.querySelector(".wrapper"),
        signupHeader = document.querySelector(".signup header"),
        loginHeader = document.querySelector(".login header");

      loginHeader.addEventListener("click", () => {
        wrapper.classList.add("active");
      });
      signupHeader.addEventListener("click", () => {
        wrapper.classList.remove("active");
      });

      function validateSignupForm() {
       
        clearErrorMessages();

        var fullName = document.getElementById('fullName').value;
        var signupEmail = document.getElementById('signupEmail').value;
        var signupPassword = document.getElementById('signupPassword').value;
        var signupCheck = document.getElementById('signupCheck').checked;
        var emailRegex = /^[^\s@]+@[^\s@]+\.(com|net|org)$/;



        if (!/^[A-Z]/.test(fullName)) {
          displayErrorMessage('The first letter of the full name must be a capital letter.', 'fullNameError');
          return false;
        }

        if (!emailRegex.test(signupEmail)) {
          displayErrorMessage('Please enter a valid email address.', 'signupEmailError');
          return false;
        }

        if (signupPassword.length < 8 || !/[A-Z]/.test(signupPassword)) {
          displayErrorMessage('Password must be at least 8 characters long and have a capital letter.', 'signupPasswordError');
          return false;
        }
      
        window.location.href = 'Main.php';

        return false;
      }

      function validateLoginForm() {
        
        clearErrorMessages();

        var loginEmail = document.getElementById('loginEmail').value;
        var loginPassword = document.getElementById('loginPassword').value;

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(loginEmail)) {
          displayErrorMessage('Please enter a valid email address.', 'loginEmailError');
          return false;
        }
        if (loginPassword.length < 8 || !/[A-Z]/.test(loginPassword)) {
          displayErrorMessage('Wrong Password.', 'loginPasswordError');
          return false;
        }

        
        window.location.href = 'Main.php';

        return false;
      }

      function displayErrorMessage(message, targetElementId) {
        var errorElement = document.getElementById(targetElementId);
        errorElement.innerHTML = message;
      }

      function clearErrorMessages() {
       
        document.getElementById('fullNameError').innerHTML = '';
        document.getElementById('signupEmailError').innerHTML = '';
        document.getElementById('signupPasswordError').innerHTML = '';
        document.getElementById('loginEmailError').innerHTML = '';
        document.getElementById('loginPasswordError').innerHTML = '';
      }
    </script>
  </section>
</body>

</html>
