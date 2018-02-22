<?php

session_start();

if (!(isset($_SESSION['ime']))){
	header("Location: index.php?greska=3"); 
	exit();
}

?>

cms 