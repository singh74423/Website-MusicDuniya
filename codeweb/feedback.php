<html>
    <head>
        <link href="feedback.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="favicon.png">
</head>
<body style="background-color: rebeccapurple;">
<?php 
include("header.php")
?>

<main>
<?php 
include("database.php");
?>
<form action="action.php?un=<?php echo $sss ?>" method="POST">
      <div class="title">
        <h2>FEEDBACK</h2>
      </div>
      <div class="half">
        <div class="item">
          <label for="name">NAME</label>
          <input type="text" id = "name" name="uname" required>
        </div>
        <div class="item">
          <label for="email">EMAIL</label>
          <input type="text" id = "email" name="uemail" required>
        </div>
      </div>
      <div class="full">
        <label for="message">MESSAGE</label>
        <textarea id = "message" name="umsg" ></textarea>
      </div>
      <div class="action">
        <input type="submit" value = "SEND MESSAGE" name="usubmit">
        <input type="reset" value = "RESET">
      </div>
     
    </form>

</main>
<?php include "footer.php" ?>

</body>
<script>
    
    document.getElementById("active_5").className="active";
    document.getElementById("background").style.backgroundColor =  'rgba(27,31,34,0.80)';
    </script>
</html>

