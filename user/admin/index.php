<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';
require $_SERVER['DOCUMENT_ROOT'].'/config/dbcm.php';

if(!isset($_SESSION['userType']) || $_SESSION['userType'] != 3) Header("Location: \\user/");

pageHead();
$conn=db_connect();
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