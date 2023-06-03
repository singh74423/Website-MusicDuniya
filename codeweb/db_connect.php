<?php

$servername = "localhost";

$username = "root";

$pass = "";

$database = "your database name";





$con = mysqli_connect($servername,$username,$pass,$database);

if($con){

    // echo "Data Saved Successfully!";

}else echo "Data not saved!";

?>