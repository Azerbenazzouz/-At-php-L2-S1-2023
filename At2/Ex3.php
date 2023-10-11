<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./bootstrap.css">
    <title>Ex3</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class='text-center text-primary'>Exercice 3 :</h1><br>

        <form method='post' name='f' acton='Ex3.php'>
            <select class='form-select' name='S' aria-label='Default select example'>
                <option selected value='Select...'>Open this select menu</option>
                <?php
                    $tmos = ["mercedes"=>"lewishamilton", "ferrari"=>"sebastianvettel", "redbull"=>"maxverstappen", "mclaren"=>"landonorris", "renault"=>"danielricciardo", "alphatauri"=>"pierregasly", "racingpoint"=>"sergioperez", "alfa"=>"kimi", "haas"=>"kevinmagnussen", "williams"=>"georgerussell"];
                    foreach ($tmos as $key => $value) {
                        echo "<option value='$key'>$key</option>";
                    }   
                ?>
            </select><br>
            <input type="submit" name="f1" value="submit" class="btn btn-primary">
        </form>

        <?php
            if(isset($_POST['f1'])){
                $name = $_POST['S'];
                if ($name != "Select...") {
                    echo "<h1 class='mt-5'>mot de passe est : <span class='text-danger' id='motp'>".$tmos[$name]."</span></h1>";  
                }else{
                    echo "<h1 class='mt-5'>mot de passe est : <span class='text-danger' id='motp'>Select...</span></h1>";  
                }
            }
        ?>
    </div>
</body>
</html>