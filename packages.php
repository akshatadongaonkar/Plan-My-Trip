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
  $query = "SELECT * FROM `Packages`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "Package Details: " .
                $row["pck_destination"]. " - Name: " .
                $row["pck_hotel_name"]. " | Hotel: " . 
                $row["pck_days"]. " | Days: " . 
                $row["pck_nights"]. "Nights<br>";
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>