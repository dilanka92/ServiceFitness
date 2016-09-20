<?php
   include 'config.php';
// if(isset($_POST['age']) && isset($_POST['weight']) && isset($_POST['height'] && isset($_POST['email'])))
//     {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="UPDATE `user` SET `Age`=?,`Height`=?,`Weight`=? WHERE Email=?";

$query = $conn->prepare($sql);

$query->execute(array($_POST['age'],$_POST['height'],$_POST['weight'],$_POST['email']));

    echo $query->rowCount();

    $conn = null;
// }
?>