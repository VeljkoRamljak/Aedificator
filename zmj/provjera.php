<?php

include "baza.php";

if (!(empty($_POST["name"])&& empty($_POST["password"]))){
	}
else {
	header("Location: index.php?greska=1"); 
	exit();
}

$username=mysqli_real_escape_string($conn,$_POST['name']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT COUNT(id_autor) AS broj, id_autor FROM autor 
WHERE aktivan=1 and username='".$username."' 
and pass='".$pass."' 
GROUP BY id_autor";

if (!$login=mysqli_query($conn, $sql)) {
echo"Select autora nije prošao, error:".mysqli_error($conn);
}

$redak = mysqli_fetch_assoc($login);

if ($redak["broj"]==0){
	header("Location: index.php?greska=2");
	exit();
}

session_start();
$_SESSION['ime']=$username;
$_SESSION['id_autor']=$redak["id_autor"];

header("Location: cms.php");
	
?>

dopušten ulaz