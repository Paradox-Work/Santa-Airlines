<?php
require "Aircraft.php";
require "Airport.php";
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your password
$dbname = "airlines"; // Replace with your database name
$x = 4;
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
$destination = new Airport("RIX", 56.924, 23.971);
var_dump($destination);
?>
