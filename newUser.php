<?php
   include 'config.php';
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['userType']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['weight']) && isset($_POST['height']))
    {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="INSERT  INTO `user`(`ID`,`UserType`,`Email`,`Name`,`Password`,`Age`,`Height`,`Weight`) 
VALUES (null,'".$_POST['userType']."','".$_POST['email']."','".$_POST['name']."','".$_POST['password']."','".$_POST['age']."','".$_POST['height']."','".$_POST['weight']."')";

// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':userType', $_POST['userType'], PDO::PARAM_STR);
// $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);  
// $stmt->bindParam(':name', $_POST['filmReview'], PDO::PARAM_STR);  
// $stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);  
// $stmt->bindParam(':age', $_POST['age'], PDO::PARAM_STR);  
// $stmt->bindParam(':weight', $_POST['weight'], PDO::PARAM_STR);  
// $stmt->bindParam(':height', $_POST['height'], PDO::PARAM_STR);  

// $stmt->execute();
if ($conn->query($sql)) {
	echo $_POST['name'];
}else{
	echo "false";
}
 $conn = null;   
}
?>