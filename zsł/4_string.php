<?php

echo <<< FORM
<form method="post">
<input type="text" name="imie" placeholder="Wpisz imię"><br><br>
<input type="submit" name="button" value="Zatwierdź">
</form>
FORM;


if (isset($_POST['imie'])) {
$imie = $_POST['imie'];
echo "Dane przed poprawą: ",$imie, '<br>';

//zamiana na małe litery
echo strtolower($imie),'<br>';

//zamiana na duze litery
echo strtoupper($imie),'<br>';

//zamiana pierwszej litery na duza
echo ucfirst($imie),'<br>';

//zamian
echo ucwords($imie),'<br>';

//zamien wszystkie litery na male,a pierwsza na duzą

echo ucfirst(strtolower($imie)),'<hr>';

#####################################################################
$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<hr>';
echo $lorem,'<br>';
$col = wordwrap($lorem,40,'<br>');
echo $col,'<br>';


//czyszczenie zawartosci bufora
ob_clean();
/*
echo <<< FORM
<form method="post">
<input type="text" name="imie" placeholder="Wpisz imię"><br><br>
<input type="submit" name="button" value="Zatwierdź">
</form>
FORM; */

####################################################################

$name = 'Tomasz';
$name1 = '  Tomasz';
echo "Długość zmiennej $name:",strlen($name),'<br>';
echo "Długość zmiennej $name1:",strlen($name1),'<br>';
echo strlen(ltrim($name1));
echo strlen(rtrim($name1));
echo strlen(trim($name1)),'<hr>';


//przeszukiwanie ciagow znakow

$address = 'Poznań, ul.Przełajowa 4, tel.(61) 123-45-67';
$search = strstr($address, 'tel');
echo $search,'<br>';

$address = 'Poznań, ul.Przełajowa 4, tel.(61) 123-45-67';
$search = strstr($address, 'tel', true);
echo $search,'<br>';

$address = 'Poznań, ul.Przełajowa 4, tel.(61) 123-45-67'; //nie zwraca uwagi na wielkosc znakow.
$search = stristr($address, 'Tel');
echo $search,'<br>';

echo strstr('zsl@gmail.com','@');
echo strstr('zsl@gmail.com', "64"),'<hr>';

$pos = strpos('abcdefg', 'cde');
echo $pos;

$pos = strpos('abcabc', 'ab');
echo $pos,'<hr>';



/*

Sprawdz czy ciag o nazwie text1 znajduje sie w ciagu text2

*/

$text1 = "abcdabcd";
$text2 = "ab";
if(strpos($text1, $text2, true))
{
echo "Ciag $text2 został znaleziony w ciagu $text1";

}else {
  // code...
  echo "Ciag $text2 nie został znaleziony w ciagu $text1";
}


//przetwarzanie ciagow znakow


$replace = str_replace('zsl', 'szkola', 'zsl ul. Przełajowa 4');
echo $replace,'<br>';



echo substr('Janusz Kowalski', 3),'<br>'; //usz Kowalski
echo substr('Janusz Kowalski', -3),'<br>'; //przeszukiwanie
echo substr('Janusz Kowalski', 7,5),'<br>'; //przeszukiwanie
echo substr('Janusz Kowalski', 7,-3),'<br>','<hr>'; //przeszukiwanie








#####################################


//zamiana polskich znakow

$login = 'żąkil';
$censore = array('ą', 'ę', 'ś', 'ź', 'ż', 'ć', 'ó', 'ń', 'ł');
$replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

$newlogin = str_ireplace($censore, $replace, $login);
echo $newlogin,'<hr>';




}


$text= <<< TEXT

zsł - Zespół
szkół
Łączności

TEXT;

echo "Przed wyowałaniem funkcji nl2br:<br>$text<br>";
echo "<br>Po wyowałaniem funkcji nl2br:<br>";
echo nl2br($text);































 ?>
