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
                <li class="active"><a href="index.php">Clips</a></li>
                <li><a href="edit.php">Verwaltung</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Dein Account</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
<form>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationDefault01">Video</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefault02">Tags</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                </div>
                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
<br><br>

<footer class="container-fluid text-center">
    <p>2018 © Patrik Studer & Omer Asipi</p>
</footer>

</body>
</html>
