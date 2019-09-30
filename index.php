<?php 
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php'; 
pageHead();?>
  <div class="container-fluid w-100">
    <div class="row" style="height: 400px;">
      <div class="d-flex col col-lg-12 col-md-12 col-sm-12 align-items-center justify-content-center h-100 text-white" style="background-color: black;"><h3>Welcome to the legacy of Dominik's</h3></div>
      <div class="row w-100" style="height: 400px;">
        <div class="d-flex col col-sm-12 col-md-6 col-lg-6 h-100 align-items-center justify-content-center" style="background-color: salmon;"><h3>Custom pizzas handmade everyday</h3></div>
        <div class="col col-sm-12 col-md-6 col-lg-6 h-100" style="min-height:100%; width: 800px; background-size: contain;background: url('\media/2013-03-21-bmore-pizza.jpg'); min-width: 200px;"></div>
      </div>
      <div class="row w-100" style="height: 400px;">
        <div class="col col-sm-12 col-md-6 col-lg-6 h-100" style="min-height:100%; width: 800px;background: url('\media/event.jpg'); min-width: 200px;"></div>
        <div class="d-flex col col-sm-12 col-md-6 col-md-6 h-100 align-items-center justify-content-center bg-primary text-white"><h3>One wholesome family</h3></div>
      </div>
      <div class="row w-100" style="height: 400px;">
        <div class="col col-sm-12 col-md-6 col-lg-4 align-items-center justify-content-center col h-100 text-white bg-dark">
          <h2>Find Us!</h2><hr>
          <p>123 Random Address Wy.<br>
          City, Chiacago 20596</p>
          <p><a href="tel:+5555555555">555)555-5555</a></p><br>
        </div>
        <div class="embed embed-responsive col col-sm-12 col-md-6 col-lg-8 h-100">
            <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" height="100%" width="100%"frameborder="0"></iframe>
        </div>
      </div>
      
    </div>
  </div>

