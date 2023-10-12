<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' rel='stylesheet' href='./bootstrap.css'>
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Atelier 2</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="/?page=Ex1">Ex1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=Ex2">Ex2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=Ex3">Ex3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=Ex4">Ex4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=Ex5">Ex5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=Ex6">Ex6</a>
            </li>
        </ul>
        <form name="S" class="d-flex">
            <input class="form-control me-sm-2" name="page" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" name="SS" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <?php
        // auto width detect
        $width = "100%";
        $height = "900vh";
        if(isset($_GET['page'])){
            echo "<iframe src='./".$_GET['page'].".php' width='$width' height='$height'></iframe>";
            echo "<script>
                    document.head.getElementsByTagName('title')[0].innerHTML = '".$_GET['page']."';
                </script>";
        }
        else
            echo "home";
        
    ?>
    <?php
        if(isset($_GET['SS'])){
            $txt = $_GET['page'];
            $tab = ['Ex1' => 'Ex1.php',
                    'Ex2' => 'Ex2.php',
                    'Ex3' => 'Ex3.php',
                    'Ex4' => 'Ex4.php',
                    'Ex5' => 'Ex5.php',
                    'Ex6' => 'Ex6.php'];
            foreach ($tab as $key => $value) {
                if($key == $txt){
                    echo "<script>
                            document.head.getElementsByTagName('title')[0].innerHTML = '$key';
                            document.getElementsByTagName('iframe')[0].src = './$value';
                        </script>";
                }
            }
        }
    ?>
</body>
</html>