<?php

$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'OrganiserDB';

//Database Connection
$db=mysqli_connect($servername, $username, $password, $dbname);

//Check Connection
if($db===false){
  die("ERROR: Could not connect to db. " . mysqli_connect_error());
}

?>