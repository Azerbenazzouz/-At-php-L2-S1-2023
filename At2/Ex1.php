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
            $Notes = array( "Rami" => 7.5 , "Mohammed" => 19.0 , "Amira" => 15.50 , "Asma" => 10.00 , "Ahmed" => 09.50 , "Yassine" => 15.5 , "Islem" => 12.00);
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
            
            echo "Etudients qui a la bonne note <span style='color:red'>"."</span>";
        ?>
    </div>
</body>
</html>