<?php
  setcookie("age",20);
  setcookie("age",30);
  echo $_COOKIE['age'];

  setcookie("city", "Poznań",time()+ 20);
  //setcookie("age", "", time() - 1);
 ?>
