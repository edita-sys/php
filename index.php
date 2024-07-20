<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   //String operators
   $emri = "Edita";
   $mbiemri = "Deliu";
   $mosha = 19;
   $emri2 = $emri . " " . $mbiemri;
   //Test
   echo "Pershendetje, une jam " . $emri2 . " dhe jam " . $mosha . " vjece." . "<br>";
   ?>
<?php

   //Arithmetic operators(+,-,*,/,**,%)
   $numri1 = 133211;
   $numri2 = 42;
   echo "Mbledhja mes numrit " . $numri1 . " dhe " . $numri2 . ":<br>";
   echo  " Rezultati: " . $numri1 + $numri2;
   echo "<br>";
   echo "<br>";
   echo "veq po testoj qiky break a po m dhez" . "<br>";
   echo "po pom dhezka po u dufka me echo"."<br>";
   echo"<br>"; 

   //Detyrë
   $x = 5;
   $y = 32;
   $z = $y % $x;
   $rezultat = $z + 15 ;
   echo "Te gjetet mbetja e pjesetimit 31 me 5, dhe pastaj te mblidhet me 15." . "<br>";
   echo "Mbetja e pjesetimi 31 me 5 eshte " . $z . "." . " Ne qofte se mblidhet me 15 na jep rezultatin: " . $rezultat . "." . "<br>"; 

?>
<?php
   //Assignment operators
   $a = 4;
   $a += 5; 
   echo "Rezultati del " . $a . "<br>";
   echo "<br>";

   //Comparison operators
   $x1 = 15;
   $x2 = 26;
   if($x1<$x2){
    echo "x2 eshte me i madh ose barazi se x1";
   }
else {
    echo "x2 nuk eshte me i madh ose barazi me x1";
}
echo "<br>";
  //Conditions
  $bool = true;
  $n = 2;
  $s = 14;
     if ($n<$s && $bool){
     echo "The statement is true!";
  }
  else if ($n<$s || !$bool){
    echo "The statement is half true.";
  }
  else{
    echo "The statement is not true.";
  }
  echo "<br>";
  echo "<br>";
?>
<?php
//EXERCISE 1
/**Creating a PHP script that calculates the price a customer has to pay for a ticket based on their age// If the customer is under the age of 18 they get a 10% discount,
if they are above the age of 60 they get a 50% discount, if they have a membership they get an additional 10% off. **/

$mosha = 50;
$cmimi = 50;
$membership = true;
if($mosha<=18){
    $cmimi *= 0.8;
}
else if($mosha>=60){
$cmimi *= 0.5;
}
if($membership){
    $cmimi *= 0.9; 
}
$cmimiTotal = $cmimi;
echo "Cmimi i biletes suaj eshte: " . $cmimi;
?>
</body>
</html>