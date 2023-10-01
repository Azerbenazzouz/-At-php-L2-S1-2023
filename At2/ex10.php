<!-- Utiliser une boucle while pour afficher le premier entier pair obtenu par tirage aléatoire.
Utiliser la fonction rand pour le tirage aléatoire -->
<?php
    $nombre = rand(0, 100);
    while ($nombre % 2 != 0) {
        $nombre = rand(0, 100);
    }
    echo "Le premier entier pair obtenu par tirage aléatoire est $nombre";
?>