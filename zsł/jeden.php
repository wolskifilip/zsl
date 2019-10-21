<?php
echo <<< FORM
<form method="post">
<input type="text" name="imie" placeholder="Wpisz imię"><br><br>
<input type="int" name="wiek" placeholder="Wpisz wiek"><br><br>
<input type="submit" name="przycisk" value="Zatwierdź">
</form>
FORM;

$imie = $_POST['imie'];
echo "Dane przed poprawą: ",$imie, '<br>';
echo ucfirst(strtolower($imie)),'<hr>';


$wiek = $_POST['wiek'];

if ($wiek%2==0)
{
  echo "Wiek jest parzysty";
}
else {
  echo "Wiek jest nie parzysty";
}
if ($_POST['imie'] && $_POST['wiek'] == NULL)
{
  echo "Błedne dane";

}







 ?>
