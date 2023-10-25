<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link type='text/css' rel='stylesheet' href='./bootstrap.css'>
</head>
<body>
    <div class="container mt-5">
        <?php
            if(isset($_GET['prenom']) AND isset($_GET['repetition'])){
                $repetition = (int) $_GET['repetition'];
                if($repetition < 10){
                    for($i = 0; $i < $repetition; $i++){
                        echo '<p>Bonjour ' . $_GET['prenom'] . '</p>';
                    }
                }
            }
            else{
                echo 'Il faut renseigner un nom et un nombre de répétitions !';
            }
        ?>
    </div>
</body>
</html>