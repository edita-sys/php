<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Arrays
    echo "I'm so cooked";
    echo "<br>";

    $fruit = ["banana", "pineapple", "apricot", "cherry", "prune"];
    echo $fruit[1]; 

    $fruit[1] = "orange";
    echo "<br>";
    echo $fruit[1];   
    echo "<br>";

    array_splice($fruit, 0, 1);  
    echo $fruit[0] . ", " . $fruit[1] . ", " . $fruit[2] . ", " . $fruit[3];

     echo "<br>";
     $tasks = ["laundry" => "Edita","vacuum"=>"Ylli","trash"=>"Dina","dusting"=>"Lina"];
     echo $tasks["vacuum"] . " is vacuuming";
     echo "<br>";
     echo "<br>";
     $food = [
        "meat" => array("beef", "chicken", "fish"),
        "fruit" => array("apple", "mango", "cherry"),
        "berries" => array("strawberry", "blueberry", "raspberry","blackberry")
     
     ];
     echo $food["berries"][2];
     echo "<br>"
     ?> 
     <?php
     // Built-In Functions
     $string = "Hello World!";
     //SUBSTRING FUNCTIONS
     echo strlen($string);
     echo"<br>";
     echo strpos($string, "W");
     echo"<br>";
     echo str_replace("World","Edita", $string);
     echo "<br>";
     echo strtolower($string);
     echo"<br>";
     echo strtoupper($string);
     echo"<br>";
     echo substr($string, 2, -2);
     echo "<br>";
          
     // MATH FUNCTIONS
     $number= -5.5;
     echo abs($number);
     echo "<br>";
     echo round($number);
     echo "<br>";   
     echo pow(2, 3); //power to dmth 2 to the power of 3 nqit rast
     echo "<br>";
     echo sqrt(16); //square root
     echo "<br>";
     echo rand(1,100); echo "<br>"; 
     
     //ARRAY FUNCTIONS
     $array=["apple", "banana", "pineapple"];
     echo count( $array ); echo "<br>";//counts the pieces of data in array
     //DATE TIME FUNCTIONS
     echo date("Y-m-d H-i-m");
     echo "<br>";
     $date = "2004-05-11 12:00:00";
     echo strtotime($date);//counts seconds since the $date date
     echo "<br>";
     ?>
     <?php
     function sayHello ($name = "Tupac"){

        return "Nas clears ". $name . ".";
     }
    
     $test = sayHello();
    echo $test;
    echo "<br>";
?>
<?php
function mbledhje(int $numri1, int $numri2){
    $result = $numri1 + $numri2;
    return $result;
}
 $rez = mbledhje(2,3);
 echo $rez;

?>

</body>
</html>