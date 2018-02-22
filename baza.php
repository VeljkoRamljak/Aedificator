<?php
/**
 * Created by PhpStorm.
 * User: BluCyb
 * Date: 21.2.2018.
 * Time: 21:39
 */


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stranica";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM clanak
	WHERE vidljiv=1;";

if (!$rez_izbornik=mysqli_query($conn, $sql)) {
    echo "Select izbornika nije prošao, error: " . mysqli_error($conn);
}

?>


