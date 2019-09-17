<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
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
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="$img"> <p>$price</p>
                <h5 class="card-body">
                    <h5 class="card-title">$pn</h5>
                    <p class="card-text">$description</p>
                </div>
            </div>
        </div>
_EOT;
    } 
    $cols = 3;
    $col = 0;
    $result = queryTable("menu"); 
    while($item=$result->fetch_assoc()){
        $img = "../images/".$item['imgName'];
        $pn = $item['pizzaName'];
        $price= $item['price'];
        $toppings = $item['topping'];
        $description = "A pizza with ".$toppings;
        if($col==0){
            echo "<div class=\"row\">";
            printCard($img, $price, $pn, $description);
            $col++;
        } else if($col >= $cols) {
            echo "</div>";
            $col=0;
        }
        
        
        if($col >= $cols){
            
    }
}
    ?>
</body>
</html>