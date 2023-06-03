<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="login.css">
   
   
</head>
<body style="background-color:black;">
    <?php  include("header.php");include("database.php");?>
 <div class="containers">
    <div class="box">
        <!------------------ Login Box --------------------->
        <form class="box-login" id="login" method="post" action="#">

            <div class="top-header">
                <h3>Login Now</h3>
                <small>We are happy to have you back.</small>
            </div>
            <div class="input-group">
                <div class="input-field">
                    <input type="text" class="input-box" id="logEmail" name="lemail" required>
                    <label for="logEmail">Email address</label>
                </div>
                <div class="input-field">
                    <input type="password" class="input-box" id="logPassword" name="lpass" required>
                    <label for="logPassword">Password</label>
                     <div class="eye-area">
                            <div class="eye-box" onclick="myLogPassword()">
                                <i class="fa-regular fa-eye" id="eye"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                            </div>
                     </div>
                </div>

                <div class="input-field">
                    <input type="submit" class="input-submit" value="Sign In" name="login">
                </div>

            </div>

</form>

     <!-------------------- Register --------------------------->
      
     <form class="box-register" id="register"  method="post" action="#">

        <div class="top-header">
            <h3>Sign Up, Now</h3>
            <small>We are happy to have you with us.</small>
        </div>
        <div class="input-group">
            <div class="input-field">
                <input type="text" class="input-box" id="regUser" name="rusername"required>
                <label for="regUser">Username</label>
            </div>
            <div class="input-field">
                <input type="email" class="input-box" id="regEmail" name="remail" required>
                <label for="regEmail">Email address</label>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" id="regpass" name="rpass"required>
                <label for="regpass">Password</label>
            </div>
           
            <div class="input-field">
                <input type="submit" class="input-submit" value="Sign Up" name="uregister">
            </div>
            
        </div>

</form>

    <!------------------------ Switch -------------------------->
      
    <div class="switch">
        <a href="#" class="login" onclick="login()">Login</a>
        <a href="#" class="register" onclick="register()">Register</a>
        <div class="btn-active" id="btn"></div>
    </div>

    </div>
 </div>
<script>

     var x = document.getElementById('login');
     var y = document.getElementById('register');
     var z = document.getElementById('btn');
 
     function login(){
        x.style.left = "27px";
        y.style.right = "-350px";
        z.style.left = "0px";
     }
     function register(){
        x.style.left = "-350px";
        y.style.right = "25px";
        z.style.left = "150px";
     }

   // view password codes
   
   
   function myLogPassword(){

    var a = document.getElementById('logPassword');
    var b = document.getElementById('eye');
    var c = document.getElementById('eye-slash');

    if(a.type === "password"){
        a.type = "text"
        b.style.opacity = "0";
        c.style.opacity = "1";

    }else{    
        a.type = "password"
        b.style.opacity = "1";
        c.style.opacity = "0";

    }

   }
   
   
   function myRegPassword(){

var d = document.getElementById('regPassword');
var b = document.getElementById("eye-2");
var c = document.getElementById("eye-slash-2");

if(d.type === "password"){
    d.type = "text"
    b.style.opacity = "0";
    c.style.opacity = "1";

}else{    
    d.type = "password"
    b.style.opacity = "1";
    c.style.opacity = "0";

}

}

</script>
<?php
error_reporting(0);
if($_POST['login']){
    $e= $_POST['lemail'];
    $p= $_POST['lpass'];
    
    $q = "SELECT * FROM userdata WHERE uemail= '$e' AND pass = '$p'";  
   
    $data = mysqli_query($con, $q);
    $file = mysqli_fetch_assoc($data);
    $nn = mysqli_num_rows($data);
   
    if($e == $file['uemail'] && $p ==$file['pass']){
        echo "<script>
    alert('you are successfully login!');
    window.location.href = 'index.php?un=" . $file['uniqueid'] . "';
</script>";
    }else{
        echo "<div style='text-align:center;width:100%;margin:30px 20px;color:red;font-weight:700;'>Please Sign-Up </div>";
    }

  
   
}
if($_POST['uregister']){
    $e= $_POST['remail'];
    $p= $_POST['rpass'];
    $un = $_POST['rusername'];
    $q = "INSERT INTO `userdata`(`uemail`, `pass`, `uniqueid`) VALUES ('$e','$p','$un')";  
   
    $data = mysqli_query($con, $q);
    if($data){
        echo "<div style='text-align:center;width:100%;margin:30px 20px;color:Green;font-weight:700;'>You have Successfully Registered! Please Login</div>";
    }else{
        echo "<div style='text-align:center;width:100%;margin:30px 20px;color:red;font-weight:700;'>Registration failed!</div>";
    }

  
   
}
?>
<?php
include("footer.php");?>

</body>
</html>


