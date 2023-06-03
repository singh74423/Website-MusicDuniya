<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Music Duniya - Home
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Chivo+Mono:wght@200&family=Delicious+Handrawn&family=Oswald:wght@200;400&family=Roboto+Condensed&family=Roboto+Slab&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="header.css" type="text/css" rel="stylesheet"/>
    </head>
    <body><div id="background">
    <div id="hbimg"></div>
                
                <nav>
                    <?php   
                    error_reporting(0);
                    $sss = $_GET['un'];
                    $check=0;
                    if($sss!=NULL){
                            $check=1;
                    }    ?>
                    <label class="logo" onclick="location.href='index.php?un=<?php echo $sss ?>'">Music Duniya</label><input type="checkbox" id="check" class="checkbtn">
                   
                    <label for="check" id="hamburger">
                        <i class="fa fa-bars"></i>
                    </label>
                    <ul class="navigation_bar">
                        <li><a class="" href="index.php?un=<?php echo $sss ?>" id="active_1">
                            Homes
                        </a></li>
                        <li><a class="" href="bollywood.php?un=<?php echo $sss ?>" id="active_2">
                            Bollywood
                        </a></li>
                        <li><a class="" href="hollywood.php?un=<?php echo $sss ?>" id="active_3">
                            Hollywood
                        </a></li>
                        <li><a class="" href="devotional.php?un=<?php echo $sss ?>" id="active_4">
                            Devotional 
                        </a></li>
                        <?php 
                        
                        if($check==1){?>
                        <li><a class="" href="feedback.php?un=<?php echo $sss ?>" id="active_5">
                            FeedBack
                        </a></li>
                        <?php   }  else{  ?>
                        <li><a class="" href="login.php" id="active_5">
                            Login
                        </a></li>
                        <?php    }   ?>
                            
                    </ul>
                </nav>
</div>
<script>
function logoredirect(){

}
</script>
    </body>
</html>