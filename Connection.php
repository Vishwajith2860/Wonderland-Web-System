<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wonderland_theme_park";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
