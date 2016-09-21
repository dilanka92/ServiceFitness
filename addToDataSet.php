<?php
   include 'config.php';
if(isset($_POST['age']) && isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['gender']) && isset($_POST['bmr']))
    {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="INSERT  INTO `bmr_all`(`Weight`,`Height`,`Age`,`Gender`,`BMR`) 
VALUES ('".$_POST['weight']."','".$_POST['height']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['bmr']."')";

if ($conn->query($sql)) {
	echo "true";
}else{
	echo "false";
} 
}
$conn = null;   
?>