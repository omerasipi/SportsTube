
<?php require('includes/config.php');

require('layout/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <?php
    include("configg.php");

    if(isset($_POST['but_upload'])){
        $maxsize = 100242880; // 5MB



        $name = $_FILES['file']['name'];
        $target_dir = "videos/";
        $target_file = $target_dir . $_FILES["file"]["name"];
        $picname = $_POST['firstname'];
        $tag1 = $_POST['tag1'];
        $tag2 = $_POST['tag2'];
        $tag3 = $_POST['tag3'];

        // Select file type
        $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

        // Check extension
        if( in_array($videoFileType,$extensions_arr) ){

            // Check file size
            if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                echo "File too large. File must be less than 5MB.";
            }else{
                // Upload
                if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                    // Insert record
                    $query = "INSERT INTO videos(name,location, Bildname, Tag1, Tag2, Tag3) VALUES('".$name."','".$target_file."','".$picname."','".$tag1."','".$tag2."','".$tag3."')";

                    mysqli_query($con,$query);
                    echo "Upload successfully.";
                }
            }

        }else{
            echo "Invalid file extension.";
        }

    }
    ?>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1>KFTG</h1>
        <p>Clips, Tips & Aims</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.kanti-frauenfeld.ch/">KFTG</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="homelogged.php">Clips</a></li>
                <li  class="active"><a href="#">Upload</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php

                if (isset($_GET['hello'])) {
                    $user->logout();
                    header('Location: index.php');
                    exit;
                }
                ?>


                <li><a href='homelogged.php?hello=true'>logout</a></li>

                <li><a href="#"><?php if ($_SESSION['username'] != null) {
                            echo htmlspecialchars($_SESSION['username'], ENT_QUOTES);
                            echo " ";
                        }

                        ?>
                        <span class="glyphicon glyphicon-user"></span></a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container" style="width: 30%">
    <form method="post" action="" enctype='multipart/form-data'>
        Picturename:<br>
        <input class="form-control" type="text" name="firstname" value="Name">
        <br><br>
        First Tag:<br>
        <input type="text" class="form-control" name="tag1" value="Tag">
        <br><br>
        Second Tag:<br>
        <input type="text" class="form-control" name="tag2" value="Tag">
        <br><br>
        Third Tag:<br>
        <input type="text" class="form-control" name="tag3" value="Tag">
        <br><br>
        <input type='file'  name='file' />
        <br>
        <input type='submit'  value='Upload' name='but_upload'>
    </form>



</body>

<footer class="container-fluid text-center">
    <p>2018 © Patrik Studer & Omer Asipi</p>
</footer>
</html>
