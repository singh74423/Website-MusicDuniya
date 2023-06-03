<?php
$servername = "";
$username = "";
$pass = "";
$database = "";


$con = mysqli_connect($servername,$username,$pass,$database);

if($con){
    // echo "connected Successfully!";
}else echo "connected not !";
?>