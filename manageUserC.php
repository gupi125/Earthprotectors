<?php 
    session_start();
 ?>
 <!DOCTYPE html>
 <head>
   <titel></title>
</head> 
 <body>
      <?php //여기 왠지 각각 콜렉터 리싸이클러에 들어가야할듯 위에는 필요없구. 
      if (isset($_SESSION['username'])) { 
      ?>            <?php }    
          ?>      
        <?php     
             if (isset($_SESSION['username'])) {   
           $users = $mysqli->query("SELECT * FROM collector");
                while ($user_data = $users->fetch_assoc()) { ?><br><br> 
      <?php echo $user_data['username'] ?> | <a href="userprofileC.php?user=<?php echo $user_data['username'] ?>">View Profile</a>            
          <?php }          
     }      
     ?>    
 </body>
 </html>