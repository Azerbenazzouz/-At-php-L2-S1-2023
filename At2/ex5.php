<?php 
    echo "<h1>Calcul sur les variables</h1>";
    $TVA = 0.2;
    $PRIX = 150;
    $Nombre= 10;
    
    $PrixHT = $PRIX * $Nombre;
    $PrixTTC = $PrixHT * (1 + $TVA);
    echo "Le prix HT est de $PrixHT TND et le prix TTC est de $PrixTTC TND";
?>