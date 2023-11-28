<?php
    ob_start();
    echo "<h1> Liste des produits </h1>";
    echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui odit, molestias a mollitia quis perspiciatis culpa officiis neque architecto ratione quidem quod cupiditate omnis ab magnam corporis aut blanditiis repudiandae?";
    $content = ob_get_clean();
    include "layout.php";
?>