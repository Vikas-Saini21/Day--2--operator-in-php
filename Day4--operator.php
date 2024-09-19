<!-- Airthmetic/Mathematical Operator -->
<?php
$x=1000;
$y=50;
// Additon
echo $x+$y . "<br>";
// Subtraction
echo $x-$y . "<br>";
// Multiplication
echo $x*$y . "<br>";
// Division
echo $x/$y . "<br>";
// Modulus
echo $x%$y . "<br>";
?>


<!-- comparsion operator -->
<?php
$x=1000;
$y=50;
//greater than
var_dump ($x>$y);
//less than
var_dump ($x<$y);
//equal to
var_dump ($x==$y);
//greater than equal
var_dump ($x>=$y);
//less than equal
var_dump ($x<=$y);
?>

<!-- biwise operator -->
 <!-- bitwise and -->
<?php
$a=23;
$b=16;
echo $a&$b;
?>

<!-- bitwise or -->
<?php
$a=23;
$b=16;
echo $a|$b;
?>

<!-- bitwise Xor -->
<?php
$a=23;
$b=16;
echo $a^$b;
?>

<!-- bitwise compliment -->
<?php
$a=23;
echo ~$b;
?>

<!-- bitwise left shift  -->
<?php
$a=23;
echo $b<<1;
?>

<!-- bitwise right shift -->
<?php
$a=23;
echo $b>>1;
?>

<!-- logical operator -->
<!-- logical and  -->
<?php
$a=23;
echo $a>10 && $a>5;
?> 

<!-- logical or -->
<?php
$a=23;
echo $a>10 || $a<5;
?>

<!-- logical not -->
<?php
$a=23;
echo !($a<10 && $a>5);
?>  
