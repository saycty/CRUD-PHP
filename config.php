<?php
$dbhost="localhost";
$dbname="crudtest";
$dbusername="root";
$dbpass="";

$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
if($mysqli){
    // echo "connection success";
}
else{
    echo"connection failed";
}
?>