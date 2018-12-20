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
                <li><a href="edit.php">Verwaltung</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php if ($_SESSION['username'] != null) {
                            echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); echo " ";
                        }
                        else {
                            echo "Guest ";
                        }
                     ?>
                        <span class="glyphicon glyphicon-user"></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-inline">
        <input type="email" class="form-control" size="50" placeholder="Tags">
        <button type="button" class="btn btn-primary">Suchen</button>
    </form>
</div>
<br><br>

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
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body">
            <video class="img-responsive" controls preload="metadata">
                <source src="videos/2.mp4" type="video/mp4">
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
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body">
            <video class="img-responsive" controls preload="metadata">
                <source src="videos/1.mp4" type="video/mp4">
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

//not to be used
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body"><img src="videos/1.mp4" class="img-responsive"
                                     alt="Image"></div>
        <div class="panel-footer">
            <span class="badge badge-primary">Hochsprung</span>
            <span class="badge badge-primary">1M</span>
            <span class="badge badge-primary">Haha</span>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=VIDEO" class="img-responsive"
                                     alt="Image"></div>
        <div class="panel-footer">
            <span class="badge badge-primary">Hochsprung</span>
            <span class="badge badge-primary">1M</span>
            <span class="badge badge-primary">Haha</span>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=VIDEO" class="img-responsive"
                                     alt="Image"></div>
        <div class="panel-footer">
            <span class="badge badge-primary">Hochsprung</span>
            <span class="badge badge-primary">1M</span>
            <span class="badge badge-primary">Haha</span>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">sportkrass.mp4</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=VIDEO" class="img-responsive"
                                     alt="Image"></div>
        <div class="panel-footer">
            <span class="badge badge-primary">Hochsprung</span>
            <span class="badge badge-primary">1M</span>
            <span class="badge badge-primary">Haha</span>
        </div>
    </div>
</div>

<br><br>

<footer class="container-fluid text-center">
    <p>2018 © Patrik Studer & Omer Asipi</p>
</footer>

</body>
</html>
