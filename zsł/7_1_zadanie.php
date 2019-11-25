<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
    /*
    Napisz menu w ktorym uzytkownik wybiera jedno z działan,
    wykorzystaj do tego celu pola radio (suma,przedzial)
    suma - pobierze dane z dwoch pol tekstowych i zsumuje je wykoorzystujac funkcje suma
    przedzial - pobierze dane z dwoch pol tekstowych i wyswietli liczby rosnaco
    z przedzialu wykorzystujac funkcje przdzial


    */
  -->
  <form method="post">
    <input type="radio" name="suma" value="suma">Suma
    <input type="radio" name="przedzial" value="przedzial">Przedzial<br>
    <input type="submit" name="button" value="Zatwierdź"><br>
  </form>

  <?php
  if (isset($_POST['suma']) && $_POST['suma'] != NULL) {
    echo <<< FORM
    <form method="post">
    <input type="int" name="first" placeholder="Wpisz pierwsa liczbe:"><br><br>
    <input type="int" name="second" placeholder="Wpisz druga liczbe:"><br><br>
    <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
FORM;
}

if (isset($_POST['first']) && $_POST['first'] != NULL){
    $first = $_POST['first'];
    $second = $_POST['second'];
    function suma($first, $second)
    {
      echo "Wynik dodawania wynosi: ",$first + $second;
    }
    suma($first, $second);

    }
  }







   ?>


  </body>
</html>
