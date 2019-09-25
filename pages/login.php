<link rel="stylesheet" href="../css/main.css">
<script src="../scripts/main.js"></script>
<?
require_once '../pageFormat.php';
pageHeader();
?>
<form name="login" enctype="multipart/form-data">
    <input type="text" name="un" id="username" autofill=true>
    <input type="password" name="pw" id="password" autofill=true pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onfocus="showValidation()" onblur="hideValidation()" onkeyup="validate(this)">
</form>
<div id="message">
    <h3>I know... I know... it sucks; but for your safety and our necks,</h3>
    <h4>your password must have at least:</h4>
    <p id="letter" class="invalid">1 <b>lowercase</b>letter</p>
    <p id="capital" class="invalid">1 <b>uppercase</b>letter</p>
    <p id="number" class="invalid">1 <b>number</b></p>
    <p id="length" class="invalid">at least <b>8 total keypresses</b></p>
</div>