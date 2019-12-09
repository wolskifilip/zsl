<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
      //skrypt1

      $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";
      $connect = mysqli_connect("localhost","root","", "sklep");
      $result = mysqli_query($connect, $sql);

      echo "<ul>";
      while($row = mysqli_fetch_assoc($result)){
        echo "<li>",$row["nazwa"],"</li>";
      }
      echo "</ul>";

      mysqli_close($connect);

     ?>

<form method="post">
    <select name="towar">
  <option value="Gumka do mazania">Gumka do mazania</option>
  <option value="Cienkopis">Cienkopis</option>
  <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
  <option value="Markery 4 szt.">Markery 4 szt.</option>
    </select>
    <input type="submit" name="button" value="Przycisk"></input>
</form>
<?php
//skrypt 2
if (isset($_POST['towar'])) {
  $towar = $_POST['towar'];
  //echo $towar;
  $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`=\"$towar\"";

  $connect = mysqli_connect("localhost", "root", "", "sklep");

  $result = mysqli_query($connect,$sql);

  $row = mysqli_fetch_assoc($result);

  $promotion = $row['cena'] * 0.85;

  echo round($promotion, 2);
  if ($promotion < 2) {
    header('location: tanio.php');
  }else{
    header('location: drogo.php');
  }

  mysqli_close($connect);
}


 ?>
  </body>
</html>
