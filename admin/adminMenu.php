
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
     .space10 {
      height: 10px;
     }

     .menuSize {
    width: 200px;
    height: 200px;
}
    </style>
    <title>Admin Menu</title>
  </head>
  <body>
    <div class="container">
     <?php
   require_once("adminPgFormat.php");
   require_once '..//scripts/functions.php';
  
    adminPgHeader("Update Menu ","admin.png","logout");
   $conn=dbConnect();
if (!$conn)
   exit("Unable to connect DB");
$query="Select * from menu";
$result=$conn->query($query);
if(!$result) die ("Error on query");
$cols=3;
$col=0;
echo<<<EOT
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">pizzaID</th>
      <th scope="col">pizzaName</th>
      <th scope="col">Toppings</th>
      <th scope="col">price</th>
      <th scope="col">imageName</th>
    </tr>
  </thead>
  <tbody>

EOT;
while ( $item=$result->fetch_assoc()) 
{
   echo "<tr>";
 foreach($item as $key=>$value)
 {
    if ($key=="pizzaID")
    {
      $pid=$item['pizzaID']; 
      echo "<td>$pid</td>";
     }
    else 
       echo "<td><input type=\"text\" name=\"$key\" value=\"$value\"></td>";
  }
    echo "<td><button type=\"button\" class=\"btn btn-primary\" id=\"edit\" onclick=\"edit($pid)\"</button>Edit</td>";
  
    echo "</tr>";
}  
echo "</tbody>";

 ?>  
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
