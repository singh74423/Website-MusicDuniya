<html>
<head>
<link href="admin.css" rel="stylesheet"/>
<link rel="icon" type="image/png" href="favicon.png">
</head>

<body style="background-color:black;">
    <?php include("header.php");include("database.php");?>
    <main style="min-height:60vh;">
            <label style="letter-spacing:1.5px;font-family:Arial;border-bottom:2px solid white;">ADMIN PANEL</label>
            <form  method="POST">
                <label class="label">ID :</label><br>
                <input type="text" name="adminid" placeholder="Admin Id" class="admininput" required/><br>
                <label class="label">Password :</label><br>
                <input type="password" name="password" placeholder="Password" class="admininput " required />
                <br>
                <input type="submit" name="submit" value="Submit" class="adminsubmit" id="bb"/>
            </form>

            <?php
                if($_POST['submit']){
                    $id = $_POST['adminid'];
                    $p = $_POST['password'];
                    $q = "SELECT * FROM admins WHERE id='$id' AND pass = '$p';";
                    $data = mysqli_query($con,$q);
                    $file = mysqli_fetch_assoc($data);
                    if($file['id']==$id && $file['pass']==$p){
                        $vari = $file['number'];
                        echo "<script>
    alert('Your Welcome!');
    window.location.href = 'dataentry.php?un=" . $file['number'] . "';
</script>";
                    }else{
                        alert("Credential failed!");
                    }
                }
            ?>

            </main>
            <?php include("footer.php") ?>

</body>
</html>
