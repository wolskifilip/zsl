<?php

if (!empty($_POST['color'])) {
$color=$_POST['color'];


$sql="INSERT INTO `color`(`color`) VALUES ('$color')";

require_once('../connect.php');

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
