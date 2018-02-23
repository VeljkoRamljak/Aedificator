<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
include "baza.php";


$sql9="UPDATE clanak SET 
		slika='".$_POST["fileToUpload"]."', 
		WHERE naslov='".$_SESSION['varname']."'";

if (!$rezultat=mysqli_query($conn, $sql9)) {
    echo"Izmjena članka nije uspjelo, error: ".mysqli_error($conn);
}
?>

</body>
</html>