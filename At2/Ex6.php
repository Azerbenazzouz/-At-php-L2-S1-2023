<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
    <link type="text/css" rel="stylesheet" href="./bootstrap.css">

</head>
<body>
    <div class="container mt-3">
        <h1 class='text-center text-primary'>Exercice 6 :</h1><br>

        <form action="Ex6.php" name="f" method="post">
            <!-- <input class="form-control" type="text" name="txt" placeholder="Donner une chaine">
            <input type="submit" name="f1" value="submit" class="btn btn-primary mt-4"> -->
        </form>
        <?php
            $tab = ['Etuduant 1' => 'Foulene ben foulene 1',
                    'Etuduant 2' => 'Foulene ben foulene 2',
                    'Etuduant 3' => 'Foulene ben foulene 3',
                    'Etuduant 4' => 'Foulene ben foulene 4'];
        ?>
        <h1 class='mb-3'>Liste des étudiants</h1>
        <table class="table table-striped table-hover">
            <tr class="table-success">
                <?php 
                    foreach ($tab as $key => $value) {
                        echo "<th>$key</th>";
                    }
                ?>
            </tr>
            <tr class="table-primary">
                <?php 
                    foreach ($tab as $key => $value) {
                        echo "<td>$value</td>";
                    }
                ?>
            </tr>
        </table>
    </div>

</body>
</html>