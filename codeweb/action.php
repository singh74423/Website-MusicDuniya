<html>
    <head>
        <style>
                 @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap');
</style>
        <style>
            main{
                min-height:100vh;
            }
            </style>
            <link rel="icon" type="image/png" href="favicon.png">
            <link href="bollywood.css" type="text/css" rel="stylesheet"/>
            </style>
</head>
<body style="background-color:black">

<?php

include ('header.php');

?>
<main style="">

<?php
include("database.php");
if($_POST['usubmit']){
  $name= $_POST['uname'];
  $email= $_POST['uemail'];
  $msg= $_POST['umsg'];

$q = "INSERT INTO contact VALUES('$name','$email','$msg')";
$data = mysqli_query($con,$q);
if($data){
//   echo "Data Inserted";
}else { echo "Data not saved"; 
   
}
}
?>

<div style="height:100%;width:100%;
text-align:center;margin-top:20vh;font-family:Roboto Mono">
<div>Data Saved Successfully!</div>
<label>Please <a href="index.php?un=<?php echo $sss ?>" style="color:red">click Here</a> To Redirect </label>

<div>
</main>
<?php

include ('footer.php');

?>
</body>
</html>