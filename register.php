<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <div class="loginform">
        <h1>Register to Internship Time Tracker</h1>
        <form action="register.php" method="POST">
            <input type="hidden" name="checkUser">
            <div class="loginform__control">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="loginform__control">
                <input type="password" required>
                <label>Password</label>
            </div>
            <button name="loginform_submit" class="loginform__btn">Register</button>
            <div class="loginform__signup">
                Already have an account? <a href="./login.php">Login</a>
            </div>
        </form>
    </div>';
</body>

</html>