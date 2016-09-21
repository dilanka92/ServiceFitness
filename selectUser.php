<?php

     include 'config.php';
   
   // Check whether email is set from android  
     if(isset($_POST['email']))
     {
      // Innitialize Variable
      $result='';
        $email = $_POST['email'];
      
      // Query database for row exist or not
          $sql = 'SELECT * FROM user WHERE  Email = :email';
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->execute();
          $obj = $stmt->fetchObject();
          if($stmt->rowCount())
          {
       print(json_encode($obj));
          }  
          elseif(!$stmt->rowCount())
          {
          echo "false";
          }
    }
  
?>
