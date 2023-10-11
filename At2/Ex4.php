<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="./bootstrap.css">
    <title>Ex4</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class='text-center text-primary'>Exercice 4 :</h1><br>
        <form action="Ex4.php" name="f" method="post">
            <input class="form-control" type="text" name="txt" placeholder="Donner une chaine">
            <input class="form-control" type="number" name="num_depart" min="0" 
                max=<?php if(isset($_POST['f1'])) echo strlen($_POST['txt']); else echo 0; ?> 
                value=<?php
                    if( isset( $_POST['f1'] ) ){
                        if( $_POST['num_depart'] > strlen($_POST['txt']) )
                            echo strlen($_POST['txt']);
                        else
                            echo $_POST['num_depart'];
                        }else{  
                            echo 0;
                    }
                    ?> 
                >
            <input type="submit" name="f1" value="submit" class="btn btn-primary mt-4">
        </form>
        <?php
            if(isset($_POST['f1'])){
                echo "<script>
                        document.f.txt.value = '$_POST[txt]'
                    </script>";
                $ch = $_POST['txt'];
                $len = strlen($ch);
                echo "<h1 class='mt-5'>la longueur de la chaine est : <span class='text-danger' id='motp'>$len</span></h1>";
                if ($len > 0) {
                    if(isset($_POST['num_depart'])){
                        $num_depart = $_POST['num_depart'];
                        echo "<h1 class='mt-5'>la sous chaine est : <span class='text-danger' id='motp'>".substr($ch, $num_depart)."</span></h1>";
                    }
                    $ch2 = "";
                    for ($i=$len-1; $i >= 0; $i--) { 
                        $ch2 .= $ch[$i];
                    }
                    echo "<h1 class='mt-5'>la chaine inversée est : <span class='text-danger' id='motp'>$ch2</span></h1>";
                }
            }
        ?>
    </div>
    
</body>
</html>