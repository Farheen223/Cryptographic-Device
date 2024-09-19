<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="Signin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include ("SigninValidation.php")
?>

        <header>
        <nav>
            <div class="nav">
            <a link href="Home.html" style="color: green;">Home</a>
            <a link href="Signup.php" style="color:green">Sign up</a>
            <a link href="Tickets.html" style="color:green"> Book Tickets</a>
            <a link href="Aboutus.html" style="color: green;">About us</a>
            <a link href="Account.html" style="color: green;">Myaccount</a>
            <form>
            <input aria-label="Search">
            <button type="submit">Search</button>
            </form>
        </nav>
        </header>
    
        <main>
            <h1>Sign in</h1>
            <form method="post" action="Signin.php">
        <div class="Signin">
                <label for="Username">Username</label>
                <input type="text" name="form_username"  placeholder="Username" required>
                <label for="Password">Password</label>
                <input type="text" name="form_password" placeholder="Password" required >
                <label>
                <input type="submit" name="form_submit"></button>
            </div>
            </form>
        </div>
    
        <br>
        <!-- Button to open the forgot password popup -->
<button onclick="openModal()">Forgot Password?</button>

<!-- forgot password popup -->
<div id="forgotPasswordModal" class="modal">

  <!-- popup content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Forgot Password</h2>
    <p>Please enter your email address to reset your password:</p>
    <input type="email" id="email" placeholder="Email">
    <div id="emailError"  style="color: darkred;  display: none;">This email address is not valid.</div>
    <button onclick="resetPassword()">Reset Password</button>
  </div>

</div>

</div>

    
        <p>OR</p>
        
    
        <div class="Login">
        <button class="button" onclick="signup()">Sign up</button>

    </div>
        <br>
        <br>
        <br>
    
        
    </main>
    
    <div class="footer">
        Contact us here: <br>
        Tel:0743928392<br>
        Email:Bobjones@outlook.com
    </div>
    </body>
    <script src="main.js"></script>
    <script src="signinpopup.js"></script>
    
    </html>
