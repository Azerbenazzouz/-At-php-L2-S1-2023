<head>
    <title>Upload</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<form action=<?=$_SERVER['PHP_SELF']?> method="post" enctype="multipart/form-data" class="form-input container mt-5">
    <input type="file" name="photo" class="form-control mt-3">
    <input type="submit" value="Upload" class="btn btn-primary mt-3">
    <?php
    if(isset($_FILES['photo'])){
        $file_name = $_FILES['photo']['name'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_type = $_FILES['photo']['type'];
        $file_size = $_FILES['photo']['size'];
        if(is_uploaded_file($file_tmp)){
            echo "<h3 class='mt-5'>File Details :</h3>";
            echo "<p class='mt-3'>File Name : $file_name</p>";
            echo "<p>File Type : $file_type</p>";
            echo "<p>File Size : $file_size</p>";
            
            move_uploaded_file($file_tmp,"images/".$file_name);
            echo "<img src='images/$file_name' width='200px' height='200px' class='mt-3 img-thumbnail'>";
        }
        else{
            echo "File not uploaded";
        }
        
    }
?>
</form>

