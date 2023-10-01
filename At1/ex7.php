<!-- Ecrire un script php permettant de comparer deux variable réelles $a et $b (utiliser
l’opérateur de comparaison combinée <=> et l’instruction switch) -->
<?php
    $a = 11;
    $b = 10;
    $result = $a <=> $b;
    switch($result){
        case -1:
            echo "<h1>$a < $b</h1>";
            break;
        case 0:
            echo "<h1>$a = $b</h1>";
            break;
        case 1:
            echo "<h1>$a > $b</h1>";
            break;
    }
?>
