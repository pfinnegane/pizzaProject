<?php
function pageHead($title = "Dominik's",$img = "logo.png"){
  if(isset($_SESSION['userType']) && $_SESSION['userType'] > 0) {
    $link = '<li><a class="nav-link text-white" href="\user/">User page</a></li>
    <li><a class="nav-link text-white" href="\config/authentication/logOut.php"><i class="text-white fa fa-user"></i> Logout</a></li>';
  }
  else $link = '<li><a class="nav-link text-white" href="\config/authentication/"><i class="text-white fa fa-user"></i> Login</a></li>';
  echo<<<EOT
<!doctype html>
<html lang="en">
<?php 
error_reporting(E_ALL, 1);?>
  <head>
    <title>Dominik\'s</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>html, body{margin: 0;padding:0}</style>
  <body>
<!-- Navbar content -->
<style>fa, fa-shopping-bag, fa-user{color: white; background-color: white;}</style>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white shadow-lg">
    <a href="" class="navbar-brand">&</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li><a class="nav-link active text-white" href="\">Home</a></li>
            <li><a class="nav-link text-white" href="\menu/">Menu</a></li>
            <li><a class="nav-link text-white" href="\menu/ingredients/">Ingredients</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="text-white"><a class="nav-link text-white" href="\user/cart.php"><i class="fa fa-shopping-bag text-white"></i> Cart</a></li>
            $link
        </ul>
    </div>
</nav>
EOT;
}
?>

