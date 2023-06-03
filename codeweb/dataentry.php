
<html>
    <head>
    <link rel="icon" type="image/png" href="favicon.png">
        <style>
            
/* Apply general styles to all form elements */
body{
    background-color:black;
}
form {
    background-color:black;
  display: flex;
  flex-direction: column;
  max-width: 300px;
  margin: 0 auto;
}

input[type="text"] {
  margin-bottom: 10px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px; margin-bottom:20px;
  color:black;
}
textarea{
    margin-bottom:20px;color:black;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
 
}

/* Adjust placeholder text color */
::-webkit-input-placeholder {
  color: #999;
}

:-moz-placeholder {
  color: #999;
}

::-moz-placeholder {
  color: #999;
}

:-ms-input-placeholder {
  color: #999;
}

</style>
</head>
    <body>
    <?php
    include("header.php");
include("database.php");

$check = $_GET['un'];
if($check==NULL || $check==""){
  echo "<script>alert('Please Login as Admin and then try again');</script>";
  echo "<div style='min-height:50vh;'></div>";
}
else{
$q = "SELECT * FROM admins where number='$check'";
$data = mysqli_query($con,$q);
$file= mysqli_fetch_assoc($data);
if($check==$file['number'] ){
?>
<main >
<div style="text-align:center;margin:30px 0px;"><label style="color:white;font-family:Arial"> DataEntry</label>
</div>
    <form action="#" method="POST">
    <input type="text" placeholder="title" name="title" required/>
    <input type="text" placeholder="image url" name="url" required/>
    <input type="text" placeholder="type- B/H/D" name="type" required/>
   
    <input type="text" placeholder="audio url" name="audio" required/>
   
    <textarea name="body" placeholder="body "></textarea>

    <input type="submit" value="Send" name="submit" >
        </form>


</main>
<?php
}else{
  echo "<script>alert('Suspecious Activity Detected!');";
  echo "
       window.location.href = 'index.php';
</script>";
}
error_reporting(0);
if($_POST['submit']){
    $t= $_POST['title'];
    $u= $_POST['url'];
    $ty= $_POST['type'];
    $b= $_POST['body'];
  $aurl = $_POST['audio'];
  
  $q = "INSERT INTO datafiles(`title`, `url`, `body`, `audiourl`, `type`) VALUES('$t','$u','$b','$aurl','$ty')";
  $data = mysqli_query($con,$q);
  if($data){
    echo "<label style='width:100%;text-align:center;color:Green;font-weight:700;margin:auto;'>Data Inserted</label>";
  }else{ echo "Data not saved";
  echo  mysqli_error($con);
  }
  }
}
?>

<?php
include("footer.php");
?>

</body>
    </html>
