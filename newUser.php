<?php
   include 'config.php';
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['userType']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['gender']))
    {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="INSERT  INTO `user`(`ID`,`UserType`,`Email`,`Name`,`Password`,`Age`,`Height`,`Weight`,`Gender`) 
VALUES (null,'".$_POST['userType']."','".$_POST['email']."','".$_POST['name']."','".$_POST['password']."','".$_POST['age']."','".$_POST['height']."','".$_POST['weight']."','".$_POST['gender']."')";

if ($conn->query($sql)) {
	echo $_POST['email'];
}else{
	echo "false";
} 
}
$conn = null;   
?>