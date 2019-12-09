<?php

$colors = array("Red", "Green", "Blue");
$colors[3] = "Magenta";


function ShowArray($tab)
{
  for ($i=0; $i < count($tab); $i++) {
    $element = $i + 1;
    echo "Kolor $element: $tab[$i]<br>";
  }
  echo "<hr>";

}
ShowArray($colors);

//tablice asocjacyjne

$data = array(
  "name" => "Janusz",
  "surname" => "Nowak",
  "age" => 20,
  "country" => "Polska",
);
echo $data["age"],'<br>';



foreach ($data as $value) {
  echo "$value<br>";
}
function ShowArrayAssoc($data)
{

foreach ($data as $key => $value) {
  echo "$key: $value <br>";
}

}
ShowArrayAssoc($data);

//tablice wielowymiarowe

$student = array(
  array("Anna", "Nowak", "Poznań"),
  array("Anna"),
  array("Krystyna", "Pawlak"),
);
echo $student[2][0],"<hr>";

//napisa funkcje wswietlanjaca zawartosc tablicy wielowymiarowe o nazwie student wykorzystujacej petle for

function ShowValues($student)
{
  for ($i=0; $i <count($student) ; $i++) {

    for ($j=0; $j <count($student[$i]) ; $j++) {
      echo $student[$i][$j]," ";

    }
    echo "<br>";
  }
}
ShowValues($student);

function ShowForeach($student)
{
  foreach ($student as $value) {
foreach ($value as $x) {
  echo "$x";
}
  }
  echo "<hr>";
}
ShowForeach($student);

/*
zad.dom.
utworzyc tablice 3-wymiarową oraz 5-wymiarową
napisz do tych tablic funkcje wyswietlajace dane

*/
$tab = array(
array(
array(
array(
array(
"Jest git"
	)
   )
  )
 )
);

function ShowArray5($tab)
{
	foreach($tab as $a){
		foreach($a as $b){
			foreach($b as $c) {
				echo $c;
			}
		}
	}




}




//sortowanie

$tab = array(10, 1, 15, 20, 100, 8);
function ShowArraySort($tab){
  foreach ($tab as $value) {
    echo "$value ";
  }
  echo "<hr>";
}

ShowArraySort($tab);
//niemalejaco

sort($tab);
ShowArraySort($tab);

//nierosnaca
rsort($tab);
ShowArraySort($tab);
//sortwanie tablicy asocjacyjnej

$tabAssoc = array(
  "name" => "Janusz",
  "surrname" => "Nowak",
  "age" => 20,
  "country" => "Poznań",
);
ShowArrayAssoc($tabAssoc);

//sortowanie wedlug wartości nierosnaco

sort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

//sortowanie wedlug wartosci niemalejaąco

arsort($tabAssoc);
ShowArrayAssoc($tabAssoc);
echo "<hr>";

//sortowanie wedlug klucza niemalejaco

ksort($tabAssoc);
ShowArrayAssoc($tabAssoc);

//wyswietlanie danych

var_dump($tabAssoc);
echo "<hr>";

print_r($tabAssoc);
echo "<pre>";
print_r($tabAssoc);
echo "</pre>";

echo <<< FORM
<form method="post">
<input type="text" name="imie" placeholder="Wpisz imię"><br><br>
<input type="int" name="wiek" placeholder="Wpisz wiek"><br><br>
<input type="submit" name="przycisk" value="Zatwierdź">
</form>
FORM;

$imie = $_POST['imie'];
$wiek = $_POST['wiek'];
print_r($imie);
echo "<br>";
var_dump($wiek);




























 ?>
