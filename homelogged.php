<?php require('includes/config.php');

require('layout/header.php');
?>
<?php
include("configg.php");
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
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1>SportsTube</h1>
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
                <li class="active"><a href="home.php">Clips</a></li>
                <li><a href="edit.php">Upload</a></li>
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
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <form class="form-inline">
                <input type="text" class="form-control" size="50" placeholder="Tags">
                <button type="button" class="btn btn-primary">Suchen</button>
            </form>
        </div>


</div>
</div>
<br><br>

<?php
$fetchVideos = mysqli_query($con, "SELECT location, name, id,Bildname, Tag1, Tag2, Tag3 FROM videos ORDER BY id ASC");
while($row = mysqli_fetch_assoc($fetchVideos)){
    $location = $row['location'];
    $name = $row['name'];
    $id = $row['id'];
    $Bildname = $row['Bildname'];
    $Tag1 = $row['Tag1'];
    $Tag2 = $row['Tag2'];
    $Tag3 = $row['Tag3'];

    echo "<div class=\"col-sm-4\">\n";
    echo "<div class=\"panel panel-primary\">\n";
    echo "<div class=\"panel-heading\">$name</div>\n";
    echo "<div class=\"panel-body\">\n";
    echo "<video src='".$location."' id=\"vid$id\" controls class=\"img-responsive\" preload=\"metadata\"></video>\n";
    echo "
    <div class=\"row\">
                    <div class=\"col-xs-3 col-sm-3 col-md-3\">
                        <div class=\"abstand\">
                            Slow Motion
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-sm-6 col-md-6\">
                        <div class=\"abstand\">
                            <input type=\"range\" class=\"slider\" min=\"0.1\" max=\"2\" step=\"0.01\" value=\"1\" id=\"range$id\" onchange=\"slowMotion(this.id)\">\n
                        </div>
                    </div>
                    <div class=\"col-xs-3 col-sm-3 col-md-3\">
                        <div class=\"abstand\">
                            Fast Motion
                        </div>
                    </div>
    </div>";
    echo "</div>\n";
    echo "<div class=\"panel-footer\">";
    echo "<span class=\"badge badge-primary\">$Tag1</span>";
    echo "<span class=\"badge badge-primary\">$Tag2</span>";
    echo "<span class=\"badge badge-primary\">$Tag3</span>";
    echo "</div>\n";
    echo "</div>\n";
    echo "</div>\n";

}
?>
</body>
<script src="js/script.js"></script>
</body>
</html>
