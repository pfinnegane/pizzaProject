<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
  	<?php
  	
function pageHeader($title = "Dominik's",$img = "logo.png"){
echo<<<EOT
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
<img class="navbar-brand" src="../images/$img"  style="height: 80px;">
<h2>$title</h2>
<!-- Navbar content -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"> <a class="nav-link" href="./pages/menu.php">Menu</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Orders</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Login</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Signup</a></li>
      <li class="nav-item"> <a class="nav-link disabled" href="#">More</a></li>
    </ul>
    </div>
  </nav>
EOT;
}

     function pageFooter($img)
     {

       echo<<<EOT
        <div class="row">
          <img src=".//images//$img"  class="img-fluid" >
     
          <nav class="navbar ">
          <!-- Navbar content -->
              <a class="nav-item nav-link active" href="#">Career<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">adminLogin</a>
              <a class="nav-item nav-link" href="#">Ingredients</a>
            </nav>
        </div>
        <hr class="style1"/>
EOT;
    }

  	?>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

