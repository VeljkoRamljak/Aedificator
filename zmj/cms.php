<?php

session_start();

if (!(isset($_SESSION['ime']))){
	header("Location: index.php?greska=3"); 
	exit();
}

include "baza.php";
$edit = 0;

if (isset($_GET["opcija"])){
	if ($_GET["opcija"]=="brisanje"){
		
		$sql5="UPDATE clanak SET vidljiv=0 
		WHERE id_clanak='".$_GET["id_clanak"]."'";
		
		if (!$rezultat=mysqli_query($conn, $sql5)) {
		echo"Select članka nije uspjelo, error: ".mysqli_error($conn);
		}
	}
	if ($_GET["opcija"]=="mijenjanje"){
		
		$sql6="SELECT * FROM clanak 
		WHERE id_clanak='".$_GET["id_clanak"]."'";
		
		if (!$rezultat=mysqli_query($conn, $sql6)) {
		echo"Mijenjanje članka nije uspjelo, error: ".mysqli_error($conn);
		}
		
		$redak_clanak=mysqli_fetch_assoc($rezultat);
		$edit = 1;
	}
	if ($_GET["opcija"]=="izmijeni"){
		
		$sql7="UPDATE clanak SET 
		naslov='".$_POST["naslov"]."', 
		sazetak='".$_POST["sazetak"]."', 
		tekst='".$_POST["tekst"]."', 
		hashtag='".$_POST["hashtag"]."'
		WHERE id_clanak='".$_GET["id_clanak"]."'";
		
		if (!$rezultat=mysqli_query($conn, $sql7)) {
		echo"Izmjena članka nije uspjelo, error: ".mysqli_error($conn);
		}
	}
	if ($_GET["opcija"]=="dodaj"){


		
		$sql7="INSERT INTO clanak 
		VALUES(
		NULL, 
		1, 
		'',
		'".$_POST["naslov"]."', 
		'".$_POST["sazetak"]."', 
		'".$_POST["tekst"]."', 
		'".$_SESSION['ime']."', 
		NOW(),
		'img/clanak/".$_POST["fileToUpload"]."',
		'".$_POST["hashtag"]."',
		1,
		0,
		1,
		'".$_SESSION['id_autor']."'
		);";
		
		if (!$rezultat=mysqli_query($conn, $sql7)) {
		echo"Dodavanje članka nije uspjelo, error: ".mysqli_error($conn);
		}


	}
		//$redak_clanak=mysqli_fetch_assoc($rezultat);
		//$edit = 1;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Forma za poduzetnika</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Forma za administratora</a></h1>
			<div id="top-navigation">
				<a href="#">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active"><span>Svi članci</span></a></li>
			    <li><a href="#"><span></span>Novi članak</a></li>
			    <li><a href="#"><span>Fotogalerija</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- End Small Nav -->
		
		<!-- Message OK 	
		<div class="msg msg-ok">
			<p><strong>Your file was uploaded succesifully!</strong></p>
			<a href="#" class="close">close</a>
		</div>
		-->
		<!-- End Message OK -->		
		
		<!-- Message Error 
		<div class="msg msg-error">
			<p><strong>You must select a file to upload first!</strong></p>
			<a href="#" class="close">close</a>
		</div> -->
		<!-- End Message Error -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Objavljeni članci</h2>
						<div class="right">
							<label>pretraži članke</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Title</th>
								<th>Date</th>
								<th>Added by</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
					<?php
							$sql4 = "SELECT * FROM clanak 
							WHERE vidljiv=1 and id_autor=".$_SESSION['id_autor']."
							ORDER BY objavljeno";
							
							if (!$rezultat=mysqli_query($conn, $sql4)) {
							echo"Select članaka nije prošao, error: ".mysqli_error($conn);
							}
							
							while($redak = mysqli_fetch_assoc($rezultat)){
							echo '<tr>';
							echo	'<td><input type="checkbox" class="checkbox" /></td>';
							echo	'<td><h3><a href="#">'.$redak["naslov"].'</a></h3></td>';
							echo	'<td>'.$redak["objavljeno"].'</td>';
							echo	'<td><a href="#">'.$redak["autor"].'</a></td>';
							echo	'<td><a href="cms.php?opcija=brisanje&id_clanak='.$redak["id_clanak"].'
							"class="ico del">Delete</a>
							<a href="cms.php?opcija=mijenjanje&id_clanak='.$redak["id_clanak"].'" 
							class="ico edit">Edit</a></td>';
							echo '</tr>';
							}
					?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
					<?php
						if ($edit==1){
							echo '<h2>Ažuriraj članak</h2>';
						}
						else {
							echo '<h2>Dodaj novi članak</h2>';
						}
					?>
					</div>
					<!-- End Box Head -->
					
					<form action="<?php 
						if ($edit==1){
							echo "cms.php?opcija=izmijeni&id_clanak=";
							echo $redak_clanak["id_clanak"];
						} 
						else {
							echo "cms.php?opcija=dodaj";
						}
					?>" 
					method="post">
						
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 50 symbols</span>
									<label>Naslov članka <span>(Obavezno)</span></label>
									<input type="text" name="naslov" id="id_naslov" 
									value="<?php 
									if ($edit==1){
										echo $redak_clanak["naslov"];
									}
									?>" 
									class="field size1" />
								</p>
						
								<!-- <p>
									<!--<span class="req">max 100 symbols</span>
									<label>Slika članka <span></span></label>
									<input type="file" value="Upload Image" 
									name="slika" id="id_slika" class="field size1">
									<img src="../<?php 
									if ($edit==1){
										echo $redak_clanak["slika"];
									}
									?> " 
									height="300" width="300">
								</p> -->
								
								<p>
									<span class="req">max 20 symbols</span>
									<label>Sažetak <span></span></label>
									<textarea name="sazetak" id="id_sazetak" 
									class="field size1" rows="2" cols="5"><?php 
									if ($edit==1){
										echo $redak_clanak["sazetak"];
									}
									?>
									</textarea>	
								</p>
								
								<p>
									<span class="req">max 100 symbols</span>
									<label>Tekst <span>(Obavezno)</span></label>
									<textarea name="tekst" id="id_tekst" 
									class="field size1" rows="10" cols="30"><?php 
									if ($edit==1){
										echo $redak_clanak["tekst"];
									}
									?>
									</textarea>
								</p>	
								
								<p>
									<span class="req">max 100 symbols</span>
									<label>Hashtag <span></span></label>
									<textarea name="hashtag" id="id_hastag" 
									class="field size1" rows="3" cols="3"><?php 
									if ($edit==1){
										echo $redak_clanak["hashtag"];
									}
									?>
									</textarea>
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">
                            </form>
								</p>
								
								<!--<p class="inline-field">
									<label>Datum</label>
									<select class="field size2">
										<option value="">06</option>
									</select>
									<select class="field size3">
										<option value="">Prosinac</option>
									</select>
									<select class="field size3">
										<option value="">2017</option>
									</select>
								</p>-->
								
								
								
							
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<!--<input type="button" class="button" value="preview" />-->
							<?php 
								if ($edit==1){
									echo '<input type="submit" class="button" value="IZMIJENI" />';
								}

							?>
							
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box-->
				<div class="box">
					
					<!-- Box Head -->
					<!-- <div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<!-- <div class="box-content">
						<a href="#" class="add-button"><span>Add new Article</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p>
						
						<!-- Sort -->
						<!-- <div class="sort">
							<label>Sort by</label>
							<select class="field">
								<option value="">Title</option>
							</select>
							<select class="field">
								<option value="">Date</option>
							</select>
							<select class="field">
								<option value="">Author</option>
							</select>
						</div>
						<!-- End Sort -->
						
					<!-- </div>
				</div>
				<!-- End Box -->
			</div></div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2017 - PODUZETNIK</span>
		<span class="right">
			
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>