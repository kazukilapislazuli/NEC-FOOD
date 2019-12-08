<?php

include("includes/header.php");



$crops = "";
$weight = ""; 
$age = "";
$hloc = "";
$investment = "";
$long="";
$lat="";

if(isset($_POST['fsubmit'])){

	//Registration form values

	$crops = filter_input(INPUT_POST, 'crops');
	$weight = filter_input(INPUT_POST, 'wght');
	$age = filter_input(INPUT_POST, 'ag');
	$hloc = filter_input(INPUT_POST, 'h1');
	$long = filter_input(INPUT_POST, 'long');
	$lat = filter_input(INPUT_POST, 'latt');
	$investment = filter_input(INPUT_POST, 'inv');







	$date = date("Y-m-d"); //Current date

		$query = mysqli_query($con, "INSERT INTO farmers_table VALUES ('', '$crops', '$weight', '$age', '$hloc', '$investment', '$date','$long', '$lat')");

	

}
?>