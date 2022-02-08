<?php
// TODO
// HOW TO MAKE LINK THE HREF TO A FUNCTION
class UserInterface
{
    public function login()
    {
        return '
        <div class="loginform">
        <h1>Internship Time Tracker</h1>
        <form action="login.php" method="POST">
            <input type="hidden" name="checkUser">
            <div class="loginform__control">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="loginform__control">
                <input type="password" required>
                <label>Password</label>
            </div>
            <button name="loginform_submit" class="loginform__btn">Login</button>
            <div class="loginform__login">
            Already have an account? <a href="#">Login</a>
        </div>
        </form>
        </div> ';
    }
}

// public function register()
// {
//     return '
//     <div class="loginform">
//     <h1>Register to Internship Time Tracker</h1>        
//     <form action="register.php" method="POST">
//     <input type="hidden" name="checkUser">
//     <div class="loginform__control">
//         <input type="text" required>
//         <label>Username</label>
//     </div>
//     <div class="loginform__control">
//         <input type="password" required>
//         <label>Password</label>
//     </div>
//     <button name="loginform_submit" class="loginform__btn">Register</button>
//     <div class="loginform__signup">
//         Already have an account? <a href="<?php this->login(); 
//">Login</a>
// </div>
// </form>
// </div>';
// }