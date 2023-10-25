<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2</title>
    <link type='text/css' rel='stylesheet' href='./bootstrap.css'>

</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Verification d'adresse IPV4</legend>
            <form action=<?=$_SERVER['PHP_SELF'] ?> name="f" method="post">
                <input type="text" name="ip1" class="form-control mt-3">
                <input type="text" name="ip2" class="form-control mt-3">
                <input type="text" name="ip3" class="form-control mt-3">
                <input type="text" name="ip4" class="form-control mt-3">
                <input type="submit" name="f1" value="Verifier" class="btn btn-primary mt-3">
            </form>
            <?php
                include_once './Fonction.php';
                if(isset($_POST['f1'])){
                    if(valideIP($_POST['ip1'].".".$_POST['ip2'].".".$_POST['ip3'].".".$_POST['ip4'])){
                        echo "<script>alert('Adresse IP valide')</script>";
                    }else{
                        echo "<script>alert('Adresse IP non valide')</script>";
                    }
                }
            ?>
        </fieldset>
    </div>
</body>
</html>