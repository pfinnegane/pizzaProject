<?php
require_once '../pageFormat.php';
require_once '../scripts/functions.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div>
    <form action="../scripts/authentication.php" method="post">
        <input type="text" name="un" id="un">
        <input type="password" name="pw" id="pw">
        <input type="submit" value="login">
    </form>
</div>