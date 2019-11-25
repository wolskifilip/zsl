<?php

function value($a)
{
  if($a < 0)
  {
    return 'ujemna';

  }elseif ($a == 0) {
    return 'zero';
  }else {
    return 'dodatnia';
  }
}
echo value(0),'<br>';
echo gettype(value(-1)),'<br>';

function getValue()
{
  return 10.99;
}
echo getValue(),'<hr>'; //10
########################################################
//zasieg zmiennych

$x = 10;
function show()
{
  echo "Wartość zmiennej \$x wynosi:$x";
  echo $GLOBALS['x'];
}
show();
########################################
$y = 20;
function show1()
{
  global $y;
  echo "Wartość zmiennej \$y wynosi:$y";

}
show1();

########################################

function sum(){
  $number = 10;
  echo "\$liczba wynosi: $number<br>";
  $number += 10;
}
sum(); //10
sum(); //10


function sum1(){
  static $number = 10;
  echo "\$liczba wynosi: $number<br>";
  $number += 10;
}
sum1(); //10
sum1(); //20
sum1(); //30
#################################
//argumenty

function add($x, $y = 1)
{
  return $x + $y;
}
echo add(5),'<br>';
echo add(5,10),'<br>';
echo add($z),'<br>';
######################################
//argumenty i typy danych

function multi(float $x, int $y){
  return $x * $y;

}
echo multi(3,4),'<br>';
echo multi(2.5,4),'<br>';
echo multi(4,2.5),'<br>';



 ?>
