<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 4</title>
    <link type='text/css' rel='stylesheet' href='./bootstrap.css'>
</head>
<body>
    <div class="container">
        <form method="post" name="F">
            <input type="submit" name="V" value="Vendre">
            <input type="submit" name="A" value="Acheter">
            <input type="submit" name="L" value="Louer">
        </form>
    </div>
    <?php
        if(isset($_POST['V'])){
            header('Location: ./Vendre.php');
        }
        if(isset($_POST['A'])){
            header('Location: ./Acheter.php');
        }
        if(isset($_POST['L'])){
            header('Location: ./Louer.php');
        }
    ?>
</body>
</html>