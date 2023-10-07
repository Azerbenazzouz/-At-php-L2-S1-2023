<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <?php
            echo "<h1 class='text-center text-primary'>Exercice 1 :</h1><br>";
            $Notes = array( "Rami" => 7.5 , "Mohammed" => 19.0 , "Amira" => 15.50 , "Asma" => 10.00 , "Ahmed" => 09.50 , "Yassine" => 15.5 , "Islem" => 12.00);
            echo "<h2 class='text-warning'>la liste des étudiant qui ont la moyenne supérieur ou égale à 10 :</h2><br>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                </tr>";
            foreach ($Notes as $key => $value) {
                if($value >= 10)
                    echo "<tr class='table-active'>
                            <td>$key</td>
                            <td>$value</td>
                        </tr>";
            }
            echo "</table>";

            echo "<h3 class='text-body-secondary'>Nombre des etudients <span class='text-primary'>".count($Notes)."</span></h3><br>";
            $bonne = 0;
            $nomEtBonne = "";
            foreach ($Notes as $key => $value) {
                if($value >= $bonne)
                    $bonne = $value;
                    $nomEtBonne = $key;
            }

            echo "<h3 class='text-body-secondary'>Etudients qui a la bonne note : <span class='text-success'>".$nomEtBonne."</span> <span class='text-danger'>".$bonne."</span></h3><br>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                </tr>";
            foreach ($Notes as $key => $value) {
                echo "<tr class='table-active'>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
            }
            echo "</table>";

            function sortTab($Tab , $state) : array {
                $tabRes = array();
                $tabSort = $Tab;
                if($state == "asc")
                    asort($tabSort);
                else if($state == "desc")
                    arsort($tabSort);

                foreach ($Tab as $key => $value) {
                    foreach ($tabSort as $key2 => $value2) {
                        if($key == $key2)
                            $tabRes[$key] = $value2;
                    }
                }
                return $tabRes;
            }

            // trier le tableau par ordre croissant notes
            echo "<h3 class='text-body-secondary'>Trier le tableau par ordre croissant notes :</h3><br>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                </tr>";
            asort($Notes);
            foreach ($Notes as $key => $value) {
                echo "<tr class='table-active'>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
            }
            echo "</table>";
            
            // trier le tableau par ordre décroissant nom
            echo "<h3 class='text-body-secondary'>Trier le tableau par ordre décroissant des noms :</h3><br>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Nom</th>
                    <th>Note</th>
                </tr>";
            krsort($Notes);
            foreach ($Notes as $key => $value) {
                echo "<tr class='table-active'>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
            }
            echo "</table>";

            // calcul moyenne
            echo "<h3 class='text-body-secondary'>La moyenne des notes : <span class='text-primary'>".array_sum($Notes)/count($Notes)."</span></h3><br>";
            
        ?>
    </div>
</body>
</html>