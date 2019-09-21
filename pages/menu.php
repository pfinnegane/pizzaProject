<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\css/main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Menu</title>
</head>
<body>
    <?php 
    require '../scripts/functions.php';
    require '../pageFormat.php'; 
    pageHeader();
    ?>
    <?php 
        
    function printCard($img, $price, $pn, $description){   
        echo<<<_EOT
            <div class="col-xs-7 col-md-4 mt-3 card-group">
            <div class="card">
                <img class="card-img-top" style="max-height: 230px;object-fit: cover; overflow-y:hidden;" src="$img"> 
                <div class="card-body">
                    <h5 class="card-title" style="text-transform:capitalize;">$pn</h5>
                    <p class="card-text">$description</p>
                </div>
                <div class="card-footer"><small class="text-muted align-middle">$$price</small><span class="float-right align-middle btn btn-primary">Add to cart</span></div>
            </div>
            
            </div>
            
_EOT;
    } 
    $cols = 3;
    $col = 0;
    $result = queryTable("menu"); 
    echo "<div class=\"container\">";
    while($item=$result->fetch_assoc()){
        $img = "../images/".$item['imgName'];
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
</body>
</html>