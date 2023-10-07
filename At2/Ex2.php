<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./bootstrap.css">
    <title>Ex2</title>
</head>
<body>
    <div class="container mt-3">
        <?php 
            echo "<h1 class='text-center text-primary'>Exercice 2 :</h1><br>";
            $tabpays1 = array("dubai", "italie", "allemagne", "espagne","suisse" , "tunisie");

            // afficher le tableau

            echo "<h1 >Tableau des pays :</h1><br>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Index</th>
                    <th>Pays</th>
                </tr>";
            foreach ($tabpays1 as $key => $value) {
                echo "<tr class='table-active'>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
            }
            echo "</table>";
            // trie du tableau croissant ordre alphabetique
            echo "<h1 >Tableau des pays trié par ordre alphabetique :</h1><br>";
            sort($tabpays1);
            echo "<table class='table table-hover'>
                <tr>
                    <th>Index</th>
                    <th>Pays</th>
                </tr>";
            foreach ($tabpays1 as $key => $value) {
                echo "<tr class='table-active'>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
            }
            echo "</table>";
            // trie du tableau decroissant ordre valeur
            arsort($tabpays1);
            echo "<h1 >Tableau des pays trié par ordre valeur :</h1><br>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Index</th>
                    <th>Pays</th>
                </tr>";
            foreach ($tabpays1 as $key => $value) {
                echo "<tr class='table-active'>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>";
            }
            echo "</table>";
        ?>
    </div>
</body>
</html>