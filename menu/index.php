<?php 
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';
pageHead();

require_once $_SERVER['DOCUMENT_ROOT'].'/config/dbcm.php';

if(isset($_SESSION['itemAdded'])) echo "<div class=\"alert alert-success\">Item added to cart.</div>";
function printCard($img, $price, $pn, $description){   
  echo<<<_EOT
      <div class="col-xs-7 col-md-4 mt-3 card-group">
      <div class="card">
          <img class="card-img-top" style="max-height: 230px;object-fit: cover; overflow-y:hidden;" src="$img"> 
          <div class="card-body">
              <h5 class="card-title" style="text-transform:capitalize;">$pn</h5>
              <p class="card-text">$description</p>
          </div>
          <div class="card-footer"><small class="text-muted align-middle">$$price</small><a href="\config/cart/" class="float-right align-middle btn btn-primary">Add to cart</a></div>
      </div>
      
      </div>
          
_EOT;
} 
$cols = 3;
$col = 0;
$result = queryTable("menu"); 
echo "<div class=\"container\">";
while($item=$result->fetch_assoc()){
    $img = "../media/".$item['imgName'];
    $pn = $item['pizzaName'];
    $price= $item['price'];
    $toppings = $item['topping'];
    $description = "A pizza with ".$toppings;
    if($col==0) echo "<div class=\"row\">";
    
    printCard($img, $price, $pn, $description); 
    $col++;
    if($col >= $cols) {
        echo "</div>";
        $col=0;
    }
}
echo "</div>";

pageFooter();
?>