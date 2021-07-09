<?php

$Mark = 19;

if($Mark >=80 && $Mark <=100)
{
    echo "Congratulation !! You got GPA 5 - A+";
}elseif($Mark >=70 && $Mark <= 79)
{
    echo "Congratulation !! You got A";
}elseif($Mark >=60 && $Mark <= 69)
{
    echo "Congratulation !! You got A-";
}elseif($Mark >=50 && $Mark <= 59)
{
    echo "Congratulation !! You got B";
}elseif($Mark >=40 && $Mark <= 49)
{
    echo "Congratulation !! You got C";
}elseif($Mark >=33 && $Mark <= 39)
{
    echo "Congratulation !! You got D";
}elseif($Mark >=0 && $Mark <= 32)
{
    echo "Sorry !! You got F";
}else {
    echo "Invalid Number";
}


?>