<html>
    <head><title><?php 
    include("database.php");
    $no = $_GET['UID'];
    $q = "SELECT * FROM datafiles where UID = $no ";
    $data = mysqli_query($con,$q);
    $file = mysqli_fetch_assoc($data);
    echo $file['title'];?></title>
    <link rel="icon" type="image/png" href="favicon.png">
</head>
    <body style="background-color:black;">
        <?php
        include("header.php");
        
        
        $Controldown = 1;
        if($Controldown)
        $down="nodownload";
        else
        $down = "";
        ?> 
        <main style="min-height:50vh;">
        <label style="font-size:30px;margin:0 20px;padding:20px;font-family:monospace;">Title:- <?php echo $file['title'] ?></label>
        <div style="text-align:center;padding:50px 30px;">
            <img src=<?php echo $file['url'] ?> alt="POST_IMAGE" style="width:40vh;height:40vh;"/><br>
            <audio id="checklogin" controls="nodownloads" style="margin:30px;" controlsList= <?php echo $down ?> >

            <source src=<?php echo $file['audiourl'] ?> type="audio/mp3"/>
            </audio>
            <article>
               <label style="font-size:20px;font-family:Arial;font-weight:700;text-decoration:underline;margin:20px;">&nbsp;Lyrics&nbsp;</label> <br/></br>
            <?php echo $file['body'] ?>
            </article>

        </div>
        <script>
            var aud = document.getElementById("checklogin");
            aud.onplay = function() {
                <?php
                        if($sss==NULL || $sss == ""){
                            echo"aud.pause();";
                            echo"window.location.href='login.php'";
                        }else{

                        }
                ?>
            }
        </script>

        </main>
        <?php
        include("footer.php");?>
</body>
</html>