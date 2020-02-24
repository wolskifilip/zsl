<?php
session_start();
  $_SESSION['OldNum']=$_SESSION['num'];
if (!empty($_POST['name'])&& !empty($_POST['surname']) && !empty($_POST['birthday'])) {
  echo "test";
$name=$_POST['name'];
$surname=$_POST['surname'];
$birthday=$_POST['birthday'];


require_once('../connect.php');

$sql="INSERT INTO `user`( `name`, `surname`, `birthday`) VALUES ('$name','$surname','$birthday')";



if (mysqli_query($connect,$sql)){
  header('location:../');
}
else {
  echo "error";
}

}
else {
  header('location:../');
}

 ?>
