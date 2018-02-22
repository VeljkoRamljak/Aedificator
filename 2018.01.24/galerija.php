<!DOCTYPE html>
<html>
<body>

<form action="../zmj/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php 
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
	
	$sql = "SELECT * FROM galerija WHERE vidljiv=1";
	
	if (!$rez_izbornik=mysqli_query($conn, $sql)) {
		echo "Select izbornika nije prošao, error: " . mysqli_error($conn);
	}
	
	while($redak = mysqli_fetch_assoc($rez_izbornik)) {
			//echo $redak["putSlike"]."<br>";
			echo '<img src="'.$redak['putSlike'].'" alt="'.$redak['ime_slike'].'" height="100" width="200"> 
			<a href="brisi.php?id='.$redak['id_slika'].'">
			<img src="https://cdn1.iconfinder.com/data/icons/toolbar-signs/512/cancel-512.png" height="20" width="20"></a> 
			<br>';
		}

?>

</body>
</html>