<?php //spajanje na bazu
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
	
	$sql="UPDATE galerija SET vidljiv=0 
	WHERE id_slika=".$_GET["id"]."";
	
	mysqli_query($conn, $sql);
	
	header("Location: galerija.php");
	die();
	
	/*while($redak = mysqli_fetch_assoc($rez_izbornik)) {
			echo $redak["naziv"]."<br>";
		}*/	
?>