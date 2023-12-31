<?php
require_once 'header.php';


?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Everland Estates</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

  <body>

    <div class="quote">
      <p class="text-center">
        Opening Doors to Your Dreams, One Home at a Time.
      </p>
    </div>



    <div class="row mb-4 p-4">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4 mb-2">

            <div class="card">
              <img class="card-img-top" src="./Images/residential.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  Residential Property
                </h5>
                <p class="card-text">
                  3 BHK Flat For Sale in Logix Blossom Greens, Sector 143 , Noida.<br>₹35 Lac
                </p>
                <a href="property_page.php?type=Residential" class="btn btn-primary">View</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img class="card-img-top" src="./Images/commercial.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">Commercial Property</h5>
                <p class="card-text">300 Sq.Ft, Office Space For Sale in Fairfox EON, Sector 140A , Noida<br>₹18 Lac
                </p>
                <a href="property_page.php?type=Commercial" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img class="card-img-top" src="./Images/residential2.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">Residential Property</h5>
                <p class="card-text">4 BHK Villa For Sale in Sector 107 , Noida.<br>₹80 Lac
                </p>
                <a href="property_page.php?type=Residential" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>

        </div>


      </div>




    </div>

    <div class="row mt-4 p-4">
      <h4 style="color:#053831; font-weight: bold;">Featured Projects</h4>
      <hr class="solid" style="color: #053831;height:2px; " />
      <div class="col-md-6 mb-2">
        <div class="card">
          <img class="card-img-top" src="./Images/commercial3.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Commercial Property</h5>
            <p class="card-text">1456 Sq.Ft, Commercial Showroom For Sale in Fairfox EON, Sector 140A , Noida<br>₹79 Lac
            </p>
            <a href="property_page.php?type=Commercial" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-2">
        <div class="card">
          <img class="card-img-top" src="./Images/residential5.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Residential Property</h5>
            <p class="card-text">10 BHK Villa For Sale in Sector 19, Noida<br>₹4.50 Cr
            </p>
            <a href="property_page.php?type=Residential" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4 p-4">
      <h4 style="color:#053831; font-weight: bold;">Popular Owner Property</h4>
      <hr class="solid" style="color: #053831;height:2px; " />
      <div class="col-md-3 mb-2">
        <div class="card">
          <img class="card-img-top" src="./Images/residential4.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Residential Property</h5>
            <p class="card-text">5 BHK Villa For Sale in Sector 79, Noida<br>₹2.05 Cr
            </p>
            <a href="property_page.php?type=Residential" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
          <img class="card-img-top" src="./Images/commercial.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Commercial Property</h5>
            <p class="card-text">300 Sq.Ft, Office Space For Sale in Fairfox EON, Sector 140A , Noida<br>₹18 Lac
            </p>
            <a href="property_page.php?type=Commercial" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
          <img class="card-img-top" src="./Images/residential6.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Residential Property</h5>
            <p class="card-text">7 BHK Villa For Sale in Sector 70, Noida<br>₹3.00 Cr
            </p>
            <a href="property_page.php?type=Residential" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
          <img class="card-img-top" src="./Images/commercial2.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title">Commercial Property</h5>
            <p class="card-text">400 Sq.Ft, Office Space For Sale in Gurugram, Delhi<br>₹19 Lac
            </p>
            <a href="property_page.php?type=Commercial" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer p-3 text-center">
      <p> All rights reserved ©-Designed by Monika-2023</p>
    </div>
  </body>

</html>