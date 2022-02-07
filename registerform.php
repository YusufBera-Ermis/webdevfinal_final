<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="loginform">

        <h1>Register to Internship Time Tracker</h1>

        <form action="authentication.php" method="POST">
            <input type="hidden" name="signUpData">
            <div class="loginform__control">
                <input autocomplete="off" minlength="5" name="username" type="text" required>
                <label>Username</label>
            </div>


            <div class="loginform__control">
                <input autocomplete="off" type="password" minlength="8" name="password" required>
                <label>Password</label>
            </div>

            <button class="loginform__btn">Sign Up</button>

            <div class="loginform_login">
                Already registered? <a href="index.php">Login</a>
            </div>
        </form>
    </div>

    <script src="./js/textWigglyEffect.js"></script>
</body>

</html>