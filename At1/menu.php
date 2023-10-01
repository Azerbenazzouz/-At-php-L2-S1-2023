<?php
    function display_menu() : void {
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href='ex$i.php'>Exercice $i</a></li>";
        }
        echo "</ul>";
    }
?>