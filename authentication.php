
<?php

//Resource I have used:
// https://www.phptutorial.net/php-pdo/pdo-connecting-to-mysql/
//https://www.youtube.com/watch?v=os9VgBsZfCU 
// https://www.mitrajit.com/php-login-pdo-connection/
// https://www.onlyxcodes.com/2019/04/login-and-register-script-in-php-pdo.html#Configuration
// https://codereview.stackexchange.com/questions/133582/php-mysqli-code-for-login-form
// https://www.itechempires.com/2016/06/php-login-registration-system-with-php-data-object-pdo/
// https://www.phptutorial.net/php-pdo/php-pdo-mysql/
//https://www.youtube.com/watch?v=N2Mlf59piA0


session_start();

include 'connection.php';

if(isset($_POST['loginform_submit']){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username !="" && $password !=""){
        try{
            $checkquery = "SELECT username, password FROM internship WHERE username = '$username' AND password = '$password'";
            $select_statement = $pdo ->prepare($checkquery);
            $select_statement = bindParam('username',$username,PDO::PARAM_STR);
            $select_statement = bindValue('password',$password,PDO::PARAM_STR);
            $select_statement = execute();
            $count = $select_statement->rowCount();
            $row   = $select_statement->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
                $_SESSION['sess_user_id']   = $row['uid'];
                $_SESSION['sess_user_name'] = $row['username'];
                $_SESSION['sess_name'] = $row['name'];

        }else{
            $message = "Invalid username and password";
        }
    }catch(PDOException $e){
        echo e->getMessage();
    }
}else{
    $message = "both fields shall be filled.";
}};