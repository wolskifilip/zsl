
<?php
echo <<< FORM
<form method="post">
<input type="text" name="imie" placeholder="Wpisz imię"><br>
<input type="text" name="nazwisko" placeholder="Wpisz nazwisko"><br>
<input type="int" name="wiek" placeholder="Wpisz wiek"><br>
<input type="text" name="narodowosc" placeholder="Wpisz narodowosc"><br>
<input type="submit" name="button" value="Zatwierdź">
</form>
FORM;

if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['wiek']) && !empty($_POST['narodowosc'])) {
  $imie = $_POST['imie'];
  $nazwisko = $_POST['nazwisko'];
  $wiek = $_POST['wiek'];
  $narodowsc = $_POST['narodowosc'];

echo "Prawidlowo przeslany formularz";
}
else {
  echo "Nie wpisano prawidłowo danych";
}

 ?>
