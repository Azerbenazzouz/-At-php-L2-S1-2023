<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' rel='stylesheet' href='./bootstrap.css'>
    <title>Ex 2</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_GET['logout'])){
            session_destroy();
            header("location:./Ex2.php");
        }
    ?>
    <div class="container">
        <?php
            if(isset($_SESSION['log']) && isset($_SESSION['pass'])){
                if($_SESSION['log']== "Admin"){
                    echo "<h1>Information confidentielle de la page secrète 1</h1>";
                    echo "<script>alert('Bienvenue Admin')</script>";
                }else{
                    echo "<h1>Information confidentielle de la page secrète 2</h1>";
                    echo "<script>alert('Bienvenue User')</script>";
                }
                echo "<a href='./Ex2.php?logout=1' class='btn btn-danger'>Logout</a>";
            }else{
                echo "<form action=".$_SERVER['PHP_SELF']." name='F' method='post'>
                        <input type='text' name='log' class='form-control mt-3'>
                        <input type='password' name='pass' class='form-control mt-3'>
                        <input type='submit' value='login' name='s' class='btn btn-primery'>
                    </form>";
            }
        ?>
    </div>
    <?php
        $Users = array(
            "User" => "User123",
            "Admin" => "Admin123",
        ); 

        if(isset($_POST['s'])){
            if(isset($Users[$_POST['log']])){
                if($Users[$_POST['log']] == $_POST['pass']){
                    session_start();
                    $_SESSION['log'] = $_POST['log'];
                    $_SESSION['pass'] = $_POST['pass'];
                    header("location:./Ex2.php");
                }else{
                    echo "<script>alert('Login / Mot de passe incorrect')</script>";
                }
            }else{
                echo "<script>alert('Login incorrect')</script>";
            }
        }

    ?>
</body>
</html>