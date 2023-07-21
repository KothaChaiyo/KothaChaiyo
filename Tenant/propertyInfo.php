<?php

session_start();

if(!isset($_SESSION['tname']) || !isset($_SESSION['temail']) || !isset($_SESSION['tcontact'])){

    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "The requested URL was not found on this server.";
    exit;

}


include 'tenantHeader.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Property Information</title>
    <link rel="stylesheet" href="../Public/style/propertyInfo.css">
    <!-- <script src="../Public/script/tenantHeader.js"></script> -->

  </head>
  <body>

    <section class="main ">
    <div class="container">
      <p class="container-head">Property Information</p>
      <div class="container-imageCarousel"></div><br>
      <span class="container-title">2 BHK flat for rent at koteshwor</span><br>
      <span class="description">Description:</span><div class="container-description"><br>Attractive 2 BHK flat is available on rent, near Himalayan school.<br> </div><br>
      <span class="address">Address:</span><span class="container-address">Koteshwor-35, Kathmandu</span><br><br>
      <span class="ammenties">Ammenties:</span><br>
      <span class="wifi">Wifi:</span><span class="container-wifi">Yes</span><br>
      <span class="runningWater">Running Water:</span><span class="container-runningWater">Yes</span><br>
      <span class="parking">Wifi:</span><span class="container-parking">Yes</span><br><br>
      <span class="rent">Rent:</span><span class="container-rent">17000 per month</span><br>
      <span class="location">Location on map:</span><br><br>
      <div class="container-map"></div>
    </div>
  </section>
  </body>
</html>
