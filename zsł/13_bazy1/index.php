<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Połączenie z bazą</title>
  </head>
  <body>
    <h3>Tabela user</h3>
    <?php
      if (isset($_SESSION['message'])) {
      echo $_SESSION['message'],'<br><br>';

      require_once('./connect.php');


      //$sql = "select * from user where name =\"Adan\"";
      $sql = "select * from user";

      if ($result = mysqli_query($connect, $sql)) {
        //echo "Prawidłowe zapytanie do bazy";
        $_SESSION['num']=mysqli_num_rows($result);
      }
        if (isset($_SESSION['OldNum'])) {


        echo "ilosć rekordow :",$_SESSION['num'],"<br>";
        if ($_SESSION['num']>$_SESSION['OldNum']) {
        echo "Dodano  użytkownika!";
        }
      }


        echo <<< TAB

        <table>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>

         </tr>
TAB;
        while($row = mysqli_fetch_assoc($result)) {
          echo <<< ROW

          <tr>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
            <td><a href="./?update_user=$row[id]">Aktualizuj</a></td>
          </tr>
ROW;
        }

      }
      else {
        echo "Błędne zapytanie do bazy";
      }
        ?>

     </table>
     <h3>Dodaj nowego użytkownika</h3>
    <form  action="scripts/add_user.php" method="post">
    <input type="text" name="name" placeholder="Podaj Imie"><br>
    <input type="text" name="surname" placeholder="Podaj Nazwisko"><br>
    <input type="date" name="birthday" placeholder="Data urodzin"><br>
    <input type="submit" name="submit" value="Dodaj użytkownika">

   </form>
<?php
echo "<hr>";
if (isset($_GET['update_user'])) {
   $id=$_GET['update_user'];
   $sql = "select * from user where id='$id'";

   $result = mysqli_query($connect, $sql);
   $user =mysqli_fetch_assoc($result);
  //echo $user['name'];
  $name=$user['name'];
  $surname=$user['surname'];
  $birthday=$user['birthday'];
  echo <<<form
  <h3>Aktualizacja użytkownika</h3>
  <form  action="scripts/update_user.php" method="post">
  <input type="text" name="name" value="$name"><br>
  <input type="text" name="surname" value="$surname"><br>
  <input type="date" name="birthday" value="$birthday"><br>
  <input type="submit" name="submit" value="Dodaj użytkownika">

  </form>
form;
}

 ?>
 <h3>Dodaj Nowy Kolor</h3>
<form  action="scripts/add_color.php" method="post">
<input type="text" name="color" placeholder="Podaj Kolor"><br>
<input type="submit" name="submit" value="Dodaj Kolor">
<table>
<th>Id</th>
<th>Kolor</th>
<?php


$sql="select * from `color`";
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($result)) {
  echo <<< ROW
  <tr>
    <td>$row[id]</td>
    <td>$row[color]</td>
  </tr>
ROW;
}


?>
</table>


  </body>
</html>
