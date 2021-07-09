//Find the largest number between three? <br>
<br>
<br>

<?php

$FirstNumber = 15;
$SecondNumber = 20;
$ThirdNumber = 27;

if($FirstNumber > $SecondNumber && $FirstNumber > $ThirdNumber )
{
    echo "$FirstNumber";
}
else if($SecondNumber > $FirstNumber && $SecondNumber > $ThirdNumber)
{
    echo "$SecondNumber";

}else echo "$ThirdNumber";

echo "<br>";
echo "<br>";

$a = 300;
$b = 150;
$c = 175;
$d = 350;

if($a > $b && $a > $c && $a > $d)
{
    echo "$a";
}else if($b > $a && $b > $c && $b > $d)
{
    echo "$b";
}else if($c > $a && $c > $b && $c > $d)
{
    echo "$c";
}else echo "$d";

?>