<?php session_start();
    if(isset($_GET['etat'])){
        switch ($_GET['etat']) {
            case '1':
                echo "<script>alert('Merci pour votre visite')</script>";
                break;
            case '1':
                echo "<script>alert('Vous devez vous auth')</script>";
                break;
            case '3':
                echo "<script>alert('Login ou mot de passe incorrect')</script>";
                break;
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="log">
        <input type="text" name="pass">
        <input type="submit" name="s" value="Login">
    </form>
    <?php

        if(isset($_POST['s']) && !empty($_POST['log']) && !empty($_POST['pass'])){
            $log = htmlspecialchars($_POST['log']);
            $pass = htmlspecialchars($_POST['pass']);

            md5($pass);
            if ($log == "admin" && md5($pass) == "21232f297a57a5a743894a0e4a801fc3") {
                $_SESSION['log'] = $log;
                $_SESSION['pass'] = md5($pass);
                header("Location: ./page2.php");exit;
            }
            else{
                header("Location: ./login.php?etat=3");exit;
            }
        }
    ?>
</body>
</html>