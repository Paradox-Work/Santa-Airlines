<?php
require "Aircraft.php";
require "Airport.php";
require "Flight.php";
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your password
$dbname = "airlines"; // Replace with your database name
$x = 4;
$departureTime = new DateTime("2024-11-20 14:30:00", new DateTimeZone("Europe/Riga"));
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected \nsuccessfully "  ;

echo "nestrada <br> $dbname" ;
function addFour($x) {
    $result = $x +4;
    echo "<br> $result";
}
addFour(5); addFour(8);

$MyPlane = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($MyPlane);
echo "<br>";

$destination = new Airport("EWR", 40.6925, -74.168611);
var_dump($destination);
echo "<br>";

$sendoff = new Airport("RIX", 56.924, 23.971);
var_dump($sendoff);
echo "<br>";

$flight = new Flight("SA503", $sendoff, $destination, $departureTime, $MyPlane);
echo $flight->getDistance();
echo "<br>";
echo $flight->getDuration();
?>
