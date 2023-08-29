<?php
require_once 'config.php';
require_once 'header.php';

$propertyType = $_GET['type'];

$sql = "SELECT * FROM properties WHERE type = '$propertyType' ";
$result = mysqli_query($conn, $sql);
$properties = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

  <body>

    <ul class="nav subheader nav-pills nav-justified">
      <li class="nav-item">
        <a class="nav-link " href="?type=Residential">Residential </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?type=Commercial">Commercial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?type=Industrial">Industrial</a>
      </li>
    </ul>

    <div class="row mt-4 p-4">
      <h4 style="color:#053831; font-weight: bold;">
        <?php echo $propertyType ?> Properties
      </h4>
      <hr class="solid" />
      <?php if (isset($properties)) {
        foreach ($properties as $property) { ?>
          <div class="col-md-3 mb-2">
            <div class="card">
              <img class="card-img-top" src="<?php echo $property['image_url'] ?>">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $property['type'] ?> Properties
                </h5>
                <p class="card-text">
                  <?php echo $property['status'] ?><br>
                  <?php echo $property['description'] ?><br>
                  <?php echo $property['address'] ?><br>₹
                  <?php echo $property['price'] ?>
                </p>
              </div>
            </div>
          </div>
        <?php }
      } ?>

    </div>

    <div hidden>
      <div class="row mt-4 p-4">
        <h4 style="color:#053831; font-weight: bold;">
          <?php echo $propertyType ?> Properties
        </h4>
        <hr class="solid" />
        <div class="col-md-3 mb-2">
          <div class="card">
            <img class="card-img-top" src="Images/Commercial1.jpg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Commercial Real Estate</h5>
              <p class="card-text">Office Space For Sale in Fairfox EON, Sector 140A , Noida<br>₹40.0 Lac
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <div class="card">
            <img class="card-img-top" src="Images/Commercial1.jpg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Commercial Real Estate</h5>
              <p class="card-text">Office Space For Sale in Fairfox EON, Sector 140A , Noida<br>₹40.0 Lac
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <div class="card">
            <img class="card-img-top" src="Images/Commercial1.jpg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Commercial Real Estate</h5>
              <p class="card-text">Office Space For Sale in Fairfox EON, Sector 140A , Noida<br>₹40.0 Lac
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-2">
          <div class="card">
            <img class="card-img-top" src="Images/Commercial1.jpg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Commercial Real Estate</h5>
              <p class="card-text">Office Space For Sale in Fairfox EON, Sector 140A , Noida<br>₹40.0 Lac
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>