<!-- Rédiger une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3
et de 5. -->
<?php
$nombre = 44;
if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Le nombre $nombre est un multiple de 3 et de 5";
} else {
    echo "Le nombre $nombre n'est pas un multiple de 3 et de 5";
}
?>