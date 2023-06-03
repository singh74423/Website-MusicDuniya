<html>
    <head>
   
<link rel="icon" type="image/png" href="favicon.png">
        <style> @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap');
            main{
                min-height:100vh;
            }
            </style>

            <link href="south.css" type="text/css" rel="stylesheet"/>
            <title>South | Music Duniya</title>
</head>
<body>
<?php 
include("header.php");
include("database.php");
?>

<main>

<div id="page-heading">
<div class="double-line"></div>
        <div style="text-align: center;font-family:'Courier New', Courier, monospace;">Devotional</div>
        <div class="double-line"></div>
        </div>
        <div>
                  
 <table id="post-table" >
    <?php  $z=0;
    $q = "SELECT * FROM datafiles where type='D';";
    $data = mysqli_query($con,$q);
    $t = mysqli_num_rows($data);
      while($z<($t/5)+($t%5)){

        ?>
    <tr >

    <?php
    $y =1;
  
    while($y<=5){    
         $file = mysqli_fetch_assoc($data);
        if($file!=NULL){
       
        ?>
    <td>
        <div class="post-box">
<img src=<?php echo $file['url']; ?> alt="Post Image" class="post-image">
<h3 class="post-title"><a href="page.php?UID=<?php echo $file['UID'];?>&un=<?php echo $sss ?>" style="color:black;"><?php echo $file['title']; ?></a></h3>
</div>
</td>


<?php

     }
      $y++; }  ?>




</tr><?php $z++ ;}?>
</table>


        </div>

</main>
<?php include "footer.php" ?>

</body>
<script>
    
    document.getElementById("active_4").className="active";
    </script>
</html>