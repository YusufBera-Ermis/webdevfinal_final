<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Time Tracker Web Dev Final Project</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="mainContainer">
        <?php
        require_once("./UserInterface.php");
        $action = isset($_GET['action']) ? $_GET['action'] : ''; //terniary operator
        echo $action;

        $userInterface = new UserInterface();

        switch ($action) {
            case 'login':
                echo $userInterface->login();
                break;
            case 'register':
                echo $userInterface->register();
                break;
            default:
                echo $userInterface->login();
                break;
        }
        ?>
    </div>

    <script src="./js/textWigglyEffect.js"></script>
</body>

</html>