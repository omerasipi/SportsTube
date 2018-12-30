<?php
include("configg.php");
?>
<!doctype html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>

    <?php
    $fetchVideos = mysqli_query($con, "SELECT location, name FROM videos ORDER BY id DESC");
    while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['location'];
        $name = $row['name'];

        echo "<div class=\"col-sm-4\">";
        echo "<div class=\"panel panel-primary\">";
        echo "<div class=\"panel-heading\">$name</div>";
        echo "<div class=\"panel-body\">";
        echo "<video src='".$location."' controls width='320px' height='200px' >";
        echo "</div>";
        echo "</div>";
        echo "</div>";

    }
    ?>

</div>

<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body">
            <video class="img-responsive" controls preload="metadata">
                <source src="videos/Chestbounce.mov" type="video/mp4">
                Din Browser isch blöd :(
            </video>
        </div>
        <div class="panel-footer">
            <span class="badge badge-primary">Hochsprung</span>
            <span class="badge badge-primary">1M</span>
            <span class="badge badge-primary">Haha</span>
        </div>
    </div>
</div>

</body>
</html>