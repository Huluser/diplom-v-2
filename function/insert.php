<?
require "../db.php";

if ($_POST['light'] == 'light') {

	$id = $_POST['id'];
	$readings = $_POST['readings'];
	$id_dog = $_SESSION['logged_user']->login;
	$res = R::exec("INSERT INTO `light_readings` (id_dog, id, readings) VALUES ($id_dog, $id, $readings);");

	header("Location: ../index.php");
}


if ($_POST['water'] == 'water') {

	$id = $_POST['id'];
	$hot_water = $_POST['hot_water'];
	$cold_water = $_POST['cold_water'];
	$hot_water = $_POST['hot_water2'];
	$cold_water = $_POST['cold_water2'];
	$hot_water = $_POST['hot_water3'];
	$cold_water = $_POST['cold_water3'];
	$hot_water = $_POST['hot_water3'];
	$cold_water = $_POST['cold_water4'];
	$id_dog = $_SESSION['logged_user4']->login;
	$res = R::exec("INSERT INTO `water_readings` (id_dog, id, hot_water, cold_water, hot_water2, cold_water2, hot_water3, cold_water3, hot_water4, cold_water4) VALUES ($id_dog, $id, $hot_water, $cold_water, $hot_water2, $cold_water2, $hot_water3, $cold_water3, $hot_water4, $cold_water4);");

	header("Location: ../index.php");
}

// echo "<pre>";
// echo print_r($_POST);
// // echo print_r($res);
// echo print_r($_SESSION['logged_user']);
// echo "</pre>";
