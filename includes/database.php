<?php
//params to connect to a  database
$dbHost ="localhost";
$dbUser ="root";
$dbPass ="";
$dbName ="darytutorial";
//connection to the database
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die ("database connection failed!!");
}

?>