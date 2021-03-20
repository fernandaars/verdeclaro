<?php

echo "<!DOCTYPE html >";
  echo "<head>";
    echo "<meta name='viewport' content='initial-scale=1.0, user-scalable=no' />";
    echo "<meta http-equiv='content-type' content='text/html; charset=UTF-8'/>";
    echo "<title>Using MySQL and PHP with Google Maps</title>";
    echo "<style>";
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      echo "#map {";
        echo "height: 100%;";
      echo "}";
      /* Optional: Makes the sample page fill the window. */
      echo "html, body {";
        echo "height: 100%;";
        echo "margin: 0;";
        echo "padding: 0;";
      echo "}";
    echo "</style>";
  echo "</head>";

echo "<html>";
  echo "<body>";
    echo "<div id='map'></div>";

    echo "</script>";
    echo "<script async src='https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap'>";
    echo "</script>";
  echo "</body>";
echo "</html>";

$database = 'verdeclaro';
$host = 'localhost';
$user = 'fernandaars';
$pass = 'password';


$conn = mysqli_connect('localhost', 'fernandaars', 'password', 'verdeclaro');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.

$result = mysqli_query($conn, 'SELECT * FROM fairs');
echo $result->num_rows;
$row = $result->fetch_assoc();
echo $row;
while($row = $result->fetch_assoc()) {
    echo "oi";
    echo $row['fair_name'];
    echo "\n";
}
mysqli_free_result($result);
    
?>