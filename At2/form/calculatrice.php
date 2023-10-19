<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' rel='stylesheet' href='../bootstrap.css'>

    <title>Document</title>
</head>
<body>
<? echo $_SERVER['PHP_SERVE'];?>
    <div class="container mt-3">
        <h1 class='text-center text-primary'>Exercice calculatrice :</h1><br>
        <form action="" method="post" class="d-flex">
            <input type="number" name="num1" id="" class="form-control w-25" value="0" placeholder="Donner un nombre">
            <select class="form-control w-25" name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" class="form-control w-25" value="0" placeholder="Donner un nombre">
            <input type="submit" name="s" value="submit" class="btn btn-primary mt-4 w-25">
        </form>
        <?php
            if(isset($_POST['s'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $op = $_POST['op'];
                echo "<script>
                        document.f.num1.value = '$num1';
                        document.f.num2.value = '$num2';
                        document.f.op.value = '$op';
                    </script>";
                switch($op){
                    case '+':
                        $res = $num1 + $num2;
                        break;
                    case '-':
                        $res = $num1 - $num2;
                        break;
                    case '*':
                        $res = $num1 * $num2;
                        break;
                    case '/':
                        $res = $num1 / $num2;
                        break;
                }
                echo "<h1 class='text-center text-primary'>Le resultat est : $res</h1>";
            }
        ?>
    </div>
    
</body>
</html>