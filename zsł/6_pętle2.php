
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/css.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>


<?php
$row = 1;
do {
  echo '<tr>';
  $col = 1;
  do {
    echo '<td>',$col * $row, '</td> ';
    $col++;

  } while ($col <= 10);
  echo $row,'<br>';

  $row++;
  echo '<tr>';
} while ($row <= 10);
$row++;

?>
</table>

</body>


</html>
