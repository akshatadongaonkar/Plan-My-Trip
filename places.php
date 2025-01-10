
<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "travel_web";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
  //$query = "SELECT * FROM `Packages`;";
  $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=1;";
  $result = mysqli_query($conn, $sql);
  
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Oleo+Script:wght@700&family=Quicksand:wght@300;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/shared2.css" />
    <link rel="stylesheet" href="../css/places.css" />
    <title>Discover Placess</title>
  </head>
  <body>
    <header>
      <div id="page-logo">
        <a href="../index.html">Travel Goals</a>
      </div>
      <nav> 
        <ul>
          <li><a href="places.php">Destinations</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <ul>
        <li>
          <img src="../images/barcelona.jpg" alt="City of Barcelona" />
          <div class="item-content">
            <div>
              <?php
                if ($result->num_rows > 0){
                  while($row = mysqli_fetch_assoc($result))
                    {
                      echo "<h2>".$row["pck_destination"];"</h2>";
                      echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                      echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                      echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";

                    }
                }
                mysqli_free_result($result); 
              ?>
            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/hawaii.jpg" alt="Hawaii beach" />
          <div class="item-content">
          <div>
              <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=2;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>
            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/london.jpg" alt="London city" />
          <div class="item-content">
              <div>
              <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=3;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/miami.jpg" alt="Miami streets" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=4;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/munich.jpg" alt="Munich football stadium" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=5;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/new-york-city.jpg" alt="New York City skyline" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=6;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>
            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/paris.jpg" alt="Paris city" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=7;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/sydney.jpg" alt="Sydney beach" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=8;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/tokyo.jpg" alt="Tokyo skyline" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=9;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
        <li>
          <img src="../images/bali.jpg" alt="Bali beach" />
          <div class="item-content">
            <div>
            <?php
              $sql = "select pck_id,pck_destination,pck_price,pck_hotel_name,pck_days,pck_nights from packages where pck_id=10;";
              $result = mysqli_query($conn, $sql);
               if ($result->num_rows > 0){
                while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<h2>".$row["pck_destination"];"</h2>";
                    echo "<h5>Hotel Name - ".$row["pck_hotel_name"];"</h5>";
                    echo "<h5>Stay - ".$row["pck_days"]." Days ".$row["pck_nights"]." Nights </h5>";
                    echo "<h5>Price - Rs ".$row["pck_price"];"</h5>";
                  }
              }
              ?>

            </div>
            <div class="actions">
              <a href="bookings.php">Make Bookings &#x2192</a>
            </div>
          </div>
        </li>
      </ul>
    </main>
    <footer>
      <ul>
        <li>
          <a href="https://www.instagram.com">
            <img src="../images/insta.png" alt="Instagram logo"
          /></a>
        </li>
        <li>
          <a href="https://www.facebook.com">
            <img src="../images/facebook.png" alt="Facebook logo"
          /></a>
        </li>
      </ul>
    </footer>
  </body>
</html>

<?php
  $conn->close();
?>