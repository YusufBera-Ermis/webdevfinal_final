<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>


<body>
    <div id="loginform" class="loginform">
        <h1>Register to Internship Time Tracker</h1>
        <form action="register.php" method="POST">
            <div class="loginform__control">
                <input type="text" id="rusername" name="username" required>
                <label>Username</label>
            </div>
            <div class="loginform__control">
                <input type="email" id="remail " name="email" required>
                <label>Email</label>
            </div>
            <div class="loginform__control">
                <input type="password" id="rpassword" name="password" minlength="6" required>
                <label>Password</label>
            </div>
            <button name="loginform__registerbutton" id="loginform__registerbutton" class="loginform__btn">Register</button>
            <div class="loginform__signup">
                Already have an account? <a href="./login.php">Login</a>
            </div>
        </form>
    </div>
    <script src="./js/scripts.js"></script>



</body>

</html>