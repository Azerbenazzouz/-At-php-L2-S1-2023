<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlantis Tec</title>
    <link rel="stylesheet" href="../Assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Iset Rades</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" href="/">Accueil
                    <span class="visually-hidden">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/produits.php">Nos Produit</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Nos Categories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contacter_nous.php">Contacter Nous</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart mx-1"></i>
                        Panier
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/creer_compte.php">
                        <i class="fas fa-user mx-1"></i>
                        Creer compte
                    </a>
                </li>
                <?php
                    if(!isset($_SESSION['compteId'])){
                        echo "<li class='nav-item'><a class='nav-link' href='#'><i class='fas fa-sign-in mx-1'></i>Connexion</a></li>";
                    }else{
                    }
                ?>
            </ul>
        </div>
    </div>
    </nav>
    <div class="container mt-3">
        <?= $content ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>