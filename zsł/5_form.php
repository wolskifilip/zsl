<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
    <link rel="stylesheet" href="./css/5_form.css">
  </head>
  <body>

      <?php
      require_once './5_1_form.php';
      if (!empty($_POST['city']) && !empty($_POST['name']) && !empty($_POST['adres']) && !empty($_POST['szkola'])) {
        $city = $_POST['city'];
        $name = $_POST['name'];
        $dane = $_POST['adres'];
        $szkola = $_POST['szkola'];

        require_once './5_1_switch.php';



?>
<table>
  <tr>
    <th>Imie</th>
    <th>Miasto</th>
    <th>Adres</th>
    <th>Szkoła</th>
  </tr>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $city; ?></td>
    <td><?php echo nl2br($dane); ?></td>
    <td><?php echo$szkola; ?></td>
  </tr>
</table>
<?php
        echo "Miasto: $city";
      }

      ?>

  </body>
</html>
