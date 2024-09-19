<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<?php 
include "SignupValidation.php";
?>
    <header>
    <nav>
        <div class="nav">
        <a link href="Home.html" class="nav-link">Home</a>
        <a link href="Aboutus.html" class="nav-link">About us</a>
        <a link href="Tickets.html" class="nav-link"> Book Tickets</a>
        <a link href="Signin.php" class="nav-link">Sign in</a>
        <a link href="Account.html" class="nav-link">My Account</a>
        <form>
        <input aria-label="Search">
        <button type="submit">Search</button>
        </form>
    </nav>
    </header>

    <main>
        <h1>Sign Up</h1>

    <div class="Signup">
        <form method="post" action="Signup.php">
            <label for="FirstName">First Name</label>
            <input id="name" type="text" placeholder="First Name" required>
        </form>
    </div>
    <div class="Signup">
        <form method = "post" action="Signup.php">
            <label for="LastName">Last Name</label>
            <input id="name" type="text" placeholder="Last Name" required>
        </form>
        </div>

    <div class="Signup">
        <form method = "post" action="Signup.php">
            <label for="Email">Email</label>
            <input id="email" type="email" placeholder="Email" required>
        </form>
    </div>
    <div class="Signup">
        <form method = "post" action="Signup.php">
            <label for="PhoneNumber">Tel</label>
            <input id="PhoneNumber" type="tel" placeholder="PhoneNumber" 
            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
        </form>
    </div>
    </div>
    <div class="Signup">
        <form method = "post" action="Signup.php">
            <label for="Username">Username</label>
            <input id="username" type="text" placeholder="Username" required>
            </form>
            </div>

    <div class="Signup">
        <form method = "post" action="Signup.php">
            <label for="Password">Password</label>
            <input id="password" type="text" placeholder="Password" required>
            </div>

            <div class="Login">
                <dialog>
                    <button autofocus>Close</button>
                    <p>All Details Saved Successfully!</p>
                </dialog>
                <button class="button" type="submit" id="signup">Submit Details</button>
                    </div>
        
            </div>
    <div class="Login">
            <p>Already have an account? <button class="button" id="signinhere">Sign In Here</button>
            </p>
        </div>




    
</main>

<div class="footer">
    Contact us here: <br>
    Tel:0743928392<br>
    Email:Bobjones@outlook.com
</div>
<script src ="main.js"></script>
</body>

</html>