<?php
function pageHeader($title = "Dominik's",$img = "logo.png"){
echo<<<EOT
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
<img class="navbar-brand" src="\pizzaProject/images/$img"  style="height: 80px;">
<h2>$title</h2>
<!-- Navbar content -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="\pizzaProject">Home</a></li>
      <li class="nav-item"> <a class="nav-link" href="\pizzaProject/pages/menu.php">Menu</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Orders</a></li>
      <li class="nav-item"> <a class="nav-link" href="\pizzaProject/pages/login.php">Login</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Signup</a></li>
      <li class="nav-item"> <a class="nav-link disabled" href="#">More</a></li>
    </ul>
    </div>
  </nav>
EOT;
}

     function pageFooter()
     {

       echo<<<EOT
        <div class="row">
     
          <nav class="navbar ">
          <!-- Navbar content -->
              <a class="nav-item nav-link active" href="#">Career<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="\pizzaProject/pages/login.php">Login</a>
              <a class="nav-item nav-link" href="#">Ingredients</a>
            </nav>
        </div>
        <hr class="style1"/>
EOT;
    }

  	?>

