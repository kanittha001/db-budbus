<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <a class="navbar-brand" href="/"> <i class='fas fa-layer-group' style='font-size:36px;color:lightblue'></i>  Budbus </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php"> Empolyee <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>

  <form action="login.php" method="post" name="login_form">
  <br><p align = "right"><label for="username"> Username </label>
  <input type="text" name="username">     
  <label for="password"> Password </label>
  <input type="password" name="password">
  <button type="submit" class="btn btn-primary" > Sign in </button></P>
  </form>
</nav>
