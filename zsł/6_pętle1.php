
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/css.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <textarea name="adres" rows="1" cols="50" placeholder="Podaj swoje dane:"></textarea><br>
      <input type="submit" name="button" value="Zatwierdź"><br>
    </form><hr>
    <table>


<?php


$row = 1;
$max = 5;
do {
  echo '<tr>';
  $col = 1;
  do {
    if ($max + 1 == $row + $col) {
      echo '<td class="red">',$col * $row,'</td> ';

    }
    else if($col == $row)
    {
      echo '<td class="red">',$col * $row,'</td> ';
    }
    else {
      echo '<td>',$col * $row,'</td> ';
    }

    $col++;

  } while ($col <= $max);


  $row++;
  echo '<tr>';
} while ($row <= $max);
$row++;

?>
</table>

</body>


</html>
