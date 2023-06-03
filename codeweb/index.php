<html>
    <head>
       <link rel="stylesheet" href="index.css" type="text/css"/>
       <link rel="icon" type="image/png" href="favicon.png">
       <script>
    document.getElementById("active_1").className="active";
   
    </script>
     <style>
.contributor-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  background-color:white;
  padding:10px;
  margin:15px 15px;
  border-radius:5px;
}

.contributor-image {
  width: 100px; /* Adjust the size as needed */
  height: 100px; /* Adjust the size as needed */
  object-fit: cover;
  border-radius: 50%;
}

.contributor-name {
  margin-top: 10px;
  font-weight: bold;
  color:black;
}

      </style>
</head>

    <?php 
include("header.php");
include("database.php");
?><body onload="load();">
<audio id="autoplayer" controls autoplay style="display:none">
<source src="https://drive.google.com/uc?id=1wzqgPPFGw3irKNA3mqYEGpjyQSdxoWFz&export=download" type="audio/mp3"/>
</audio>
<main id="main">
        <div id="frame1" class="frame">
        <label style="position:absolute;margin:30px;padding:7px;border-radius:50%;border:2px solid white;cursor:pointer;"><i id="volumebtn"class='fas fa-volume-up' onclick="replace1();"></i><i id="mutebtn" style="display:none;" class='fas fa-volume-mute' onclick="replace2();"></i></label>
       <script>
        var z1 = document.getElementById("volumebtn");
      var z2 = document.getElementById("mutebtn");
        var myAudio = document.getElementById('autoplayer');
        function load(){
        if(myAudio.duration > 0 && !myAudio.paused){
          z1.style.display = "block";
             z2.style.display="none";
        }else{
          z2.style.display = "block";
             z1.style.display="none";
        }

      }
      
      function replace1(){
    z2.style.display = "block";
             z1.style.display="none";
             document.getElementById('autoplayer').pause();
              
      }
      function replace2(){
    z1.style.display = "block";
             z2.style.display="none";
             document.getElementById('autoplayer').play();
              
      }
        </script>
        <div class="containerr">
    <div class="subdiv">
    
      <h1>Your next song is right here...<h1>
    </div>
   

        </div></div>
        <div id="frame2"  class="frame">
<script>

    </script>

        <div class="double-line"></div>
        <div style="text-align: center;font-family:'Courier New', Courier, monospace;">Recent Uploads</div>
        <div class="double-line"></div>

      
 <table id="post-table" >
    <?php 
       
       $q ="SELECT * FROM datafiles order by rand() ";
       $data = mysqli_query($con,$q);
       $t = mysqli_num_rows($data);

       

    $x =1;
    
    while($x<=4){    ?>
    <tr>

    <?php $z=0;

    $y =1;
    while($y<=2){    
      $arrays = mysqli_fetch_assoc($data);
      ?>

    <td>
        <div class="post-box">
  <img src=<?php echo $arrays['url'];?> alt="Post Image" class="post-image">
  <h3 class="post-title"><a href="page.php?UID=<?php echo $arrays['UID'];?>&un=<?php echo $sss ?>" style="color:black;"><?php echo $arrays['title'];?> </a></h3>
</div></td>
<?php $y++; } ?>




</tr><?php $x++; } ?>
</table>

<div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-colorful-shapes_1361-1591.jpg?size=626&ext=jpg" alt="">
        </div>
        <div class="slide">
          <img src="https://img.freepik.com/free-vector/music-festival-horizontal-poster-template-electronic-dance-audio-visualizer-display_72857-88.jpg?size=626&ext=jpg" alt="">
        </div>
        <div class="slide">
          <img src="https://img.freepik.com/free-vector/music-event-poster-template-with-colorful-shapes_1361-1591.jpg?size=626&ext=jpg" alt="">
        </div>
        <div class="slide">
          <img src="https://img.freepik.com/free-vector/music-festival-horizontal-poster-template-electronic-dance-audio-visualizer-display_72857-88.jpg?size=626&ext=jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->



<div class="double-line"></div>
        <div style="text-align: center;font-family:'Courier New', Courier, monospace;">Our Popular post</div>
        <div class="double-line"></div>
        </div>
        <?php $zz =0 ;
        $dd = array("Mixed","Bollywood","Hollywood","South");
        $rr = array(8,11,10,8);
        $conditions = array("type='B' OR type='H' OR type='S'","type='B'","type='H'","type='S'");
          while($zz<4){
          ?> 
          <label style="margin:20px 20px;font-family:Arial;"><?php echo $dd[$zz]; ?></label> 
        <div style="width:100%;overflow:auto">
           
 <table id="post-table" >
    
    <tr style="overflow-x:scroll;">

    <?php 
    $str = $conditions[$zz];
   $qq =  "SELECT * from datafiles where $str order by rand() ";
    $curdata = mysqli_query($con,$qq);
 
    $z=0;
    $y =1;
    while($y<=$rr[$zz]){    
      $curarray = mysqli_fetch_assoc($curdata);
      ?>
    <td>
   
        <div class="post-box">
<img src=<?php echo $curarray['url'] ?> alt="Post Image" class="post-image">
<h3 class="post-title"><a href="page.php?UID=<?php echo $curarray['UID'] ?>&un=<?php echo $sss ?>" style="color:black;"><?php echo $curarray['title'] ?></a></h3>

</div>
</td>



<?php $y++; } ?>




</tr>
</table>


    </div>
    <?php
$zz++;
}
?>
<label style="padding-left:15px;font-family:Arial;">Contributors </label>
<table style="">
    <tr >
          <td>  <div class="contributor-box">
  <img class="contributor-image" src="contributer/sajal.jpg" alt="Contributor Image">
  <div class="contributor-name">Sajal Gupta</div>
</div>
        </td>
                  <td>  <div class="contributor-box">
  <img class="contributor-image" src="contributer/prafull.jpg" alt="Contributor Image">
  <div class="contributor-name">Prafull Tripathi</div>
</div>
        </td>
                  <td>  <div class="contributor-box">
  <img class="contributor-image" src="contributer/sanidhya.jpg" alt="Contributor Image">
  <div class="contributor-name">Sanidhya Mishra</div>
</div>
        </td>
    </tr>
    </table>

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>



</main>


</body>
<?php include "footer.php" ?>
</html>


