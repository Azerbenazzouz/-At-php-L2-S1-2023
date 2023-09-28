<?php
    $nom = "Azer";

    switch(strtoupper($nom[0])){
        case "A": case "E": case "I": case "O": case "U": case "Y":
            echo "<h1><span style='color:blue'>$nom</span> commence par une voyelle <span style='color:orange'>$nom[0]</span></h1>";
            break;
        case "B" : case "C" : case "D" : case "F" : case "G" : case "H" : case "J" : case "K" : case "L" : case "M" : case "N" : case "P" : case "Q" : case "R" : case "S" : case "T" : case "V" : case "W" : case "X" : case "Z" :
            echo "<h1><span style='color:blue'>$nom</span> commence par une consonne <span style='color:orange'>$nom[0]</span></h1>";
            break;
        default:
            echo "<h1><span style='color:blue'>$nom</span> commence par un caractère spécial <span style='color:orange'>$nom[0]</span></h1>";
    };
?>