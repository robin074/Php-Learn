<?php
//1. Indexed Array
$arrayName = ["Ronin", "Rifat", "Rahat", "Nayem", "Nahid", "Taha", "Tanim", "Jeba", "Siam", "Saom", "Shafin", "Samiha"];

print_r($arrayName);
echo "<br>";
echo "<br>";

echo $arrayName[3];


echo "<br>";
echo "<br>";

//2. Associative Array
$arrayName1 = ["Robin"=>10, "Rifat"=>20, "Rahat"=>30, "Nayem"=>40, "Nahid"=>50, "Taha"=>60, "Tanim"=>80, "Jeba"=>90, "Siam"=>100, "Saom"=>99, "Shafin", "Samiha"=>70 ];

echo $arrayName1 ["Nayem"];echo "<br>";
echo $arrayName1 ["Rahat"];echo "<br>";
echo $arrayName1 ["Jeba"];echo "<br>";
echo $arrayName1 ["Taha"];echo "<br>";

echo "<br>";
echo "<br>";
//3. Multidimensional Array
$arrayName2 = [
["Robin", 100, "Dhaka"],
["Rahat", 100, "Dhaka"],
["Baron", 100, "Dhaka"],
["Pabon", 100, "Dhaka"]

];

//Foresch Array

$arrayName3 = ["Ronin", "Rifat", "Rahat", "Nayem", "Nahid", "Taha", "Tanim", "Jeba", "Siam", "Saom", "Shafin", "Samiha"];

echo "<ul>";

foreach($arrayName3 as $a)
{
    echo " <li>$a</li> ";
}

echo "</ul>";

?>