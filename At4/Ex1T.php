<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>
<body>
    <div class="container">
        <?php
            
            if(isset($_SESSION['langue'])){
                if($_SESSION['langue'] == "Fr"){
                    echo "vous avez choisi Francais";
                }
                else if($_SESSION['langue'] == "An"){
                    echo "you chose english";
                }
                
            }
        ?>
        <?php
            if(!isset($_SESSION['langue'])){
                echo "<form action=".$_SERVER['PHP_SELF']." method='post'>
                            Fr<input type='radio' value='Fr' name='langue'>
                            An<input type='radio' value='An' name='langue'>
                            <input type='submit' value='Choisir' name='ok'>
                        </form>";
            }
        ?>
        <?php
            if(isset($_POST['ok'])){
                if($_POST['langue'] == "Fr"){
                    $_SESSION['langue'] = "Fr";
                    echo "vous avez choisi Francais";
                }
                else if($_POST['langue'] == "An"){
                    $_SESSION['langue'] = "An";
                    echo "you chose english";
                }
                header("location: ".$_SERVER['PHP_SELF']);
            }
        ?>
    </div>
</body>
</html>