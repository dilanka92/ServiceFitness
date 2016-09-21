<?php
   include 'config.php';
if(isset($_POST['sql']))
    {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$sql=$_POST['sql']);
if ($conn->query($_POST['sql'])) {
	echo "true";
}else{
	echo "false";
} 
}
$conn = null;   
?>