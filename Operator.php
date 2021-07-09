<?php
//Arithmetic Operators

$var1 = 10;
$var2 = 2;

echo $var1+$var2; // Add two numbers
echo "<br>";
echo $var1-$var2; //Sub two numbers
echo "<br>";
echo $var1*$var2; // Multiply two numbers
echo "<br>";
echo $var1/$var2; //Div two numbers
echo "<br>";
echo $var1%$var2; // Mod two numbers
echo "<br>";
echo $var1**$var2; //Exponential 
echo "<br>";
echo "<br>";


//**************************************//
//Assignment operators

$a = 20;   
$a +=10;  // Add
echo $a;
echo "<br>";

$b = 20;
$b -=10;  //Sub
echo $b;
echo "<br>";

$c = 20;
$c *=2;  //Mul
echo $c;
echo "<br>";

$d = 20;
$d /=10;  //Div
echo $d;
echo "<br>";

$e = 20;
$e %=6;  //Modu
echo $e;
echo "<br>";
echo "<br>";

//*************************************//
//Comparison Operator

//Equal equal
$variable1 = 10;
$variable2 = 10;

if($variable1==$variable2)
{
    echo "Two variable value are similar";
}
else 
{
    echo "Two variable value are Different";
}


echo "<br>";
echo "<br>";

//Identical

$variable3 = 10;
$variable4 = '10';

if($variable3===$variable4)
{
    echo "Two variable value are similar";
}
else 
{
    echo "Different type of variable";
}
echo "<br>";
echo "<br>";

//Not equal

$variable5 = 10;
$variable6 = 100;

if($variable5 != $variable6)
{
    echo "Different value";
}
else 
{
    echo "Similar valu";
}
echo "<br>";
echo "<br>";

//Greater than

$variable7_A = 210;
$variable8_B = 101;

if($variable7_A > $variable8_B)
{
    echo "A is greater than B";
}
else 
{
    echo "B is greater than A";
}
echo "<br>";
echo "<br>";

//Less Than

$variable9_A = 210;
$variable10_B = 101;

if($variable9_A < $variable10_B)
{
    echo "A is Less than B";
}
else 
{
    echo "B is Less than A";
}
echo "<br>";
echo "<br>";

//Grater than or equal to

$aa = 100;
$bb = 100;

if($aa >= $bb)
{
    echo "A and B are greater or equal value";
}
else 
{
    echo "B";
}
echo "<br>";
echo "<br>";

//Less than or equal to

$variable13_A = 5;
$variable14_B = 10;

if($variable13_A <= $variable14_B)
{
    echo "A and B are less or equal value";
}
else 
{
    echo "A";
}
echo "<br>";
echo "<br>";

//***************************************************
// Increment Decrement Operator

// pre increment 
$p = 10;
++$p; // $p = 1+$p;
echo "$p";
echo "<br>";
echo "<br>";

//post increment
$p1 = 20;
$p1++; // #p1 = $p1 +1;
echo "$p1";
echo "<br>";
echo "<br>";

//pre decrement
$p2 = 10;
--$p2; // $p2 = 1-$p2;
echo "$p2";
echo "<br>";
echo "<br>";

//post decrement
$p3 = 10;
$p3--; // $p3 = $p3 -1;
echo "$p3";
echo "<br>";
echo "<br>";

//**************************************** */
//Logical OPerator

//Logical AND
$q = 25;
$q1 = 10;
$q2 = 20;

if($q>$q1 && $q>$q2)
{
    echo "$q";
}elseif($q1>$q && $q1>$q2)
{
    echo "$q1";
}
else 
{
    echo "$q2";
}
echo "<br>";
echo "<br>";

//Logical OR

$r = 25;
$r1 = 10;
$r2 = 200;

if($r>$r1 || $r>$r2)
{
    echo "$r";
}elseif($r1>$r || $r1>$r2)
{
    echo "$r1";
}
else 
{
    echo "$r2";
}

echo "<br>";
echo "<br>";
//Logical Not

echo !false;
echo "<br>";
echo "<br>";
?>