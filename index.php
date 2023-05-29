<?php
$servername = "sql205.epizy.com";
$username = "epiz_33814377";
$pass = "RG24kB5j4ZDJ2DH";
$database = "epiz_33814377_reponsiveform";


$con = mysqli_connect($servername,$username,$pass,$database);

if($con){
    echo "Data Saved Successfully!";
}else echo "Data not saved!";
?>
