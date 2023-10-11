<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
    <link type="text/css" rel="stylesheet" href="./bootstrap.css">

</head>
<body>
    <div class="container mt-3">
        <h1 class='text-center text-primary'>Exercice 5 :</h1><br>
        <form action="Ex5.php" name="f" method="post">
            <input class="form-control" type="text" name="txt" placeholder="Donner une chaine">
            <input type="submit" name="f1" value="submit" class="btn btn-primary mt-4">
        </form>
        <?php
            if (isset($_POST['f1'])) {
                echo "<script>
                        document.f.txt.value = '$_POST[txt]'
                    </script>";
                $ch = $_POST['txt'];
                $Tab = explode(" ", $ch);
                $nch = "";
                foreach ($Tab as $key => $value) {
                    $nch .= $value[0];
                }
                $nch = strtoupper($nch);
                echo "<h1 class='mt-5'>la chaine inversée est : <span class='text-danger' id='motp'>$nch</span></h1>";;
            }
        ?>
    </div>
</body>
</html>