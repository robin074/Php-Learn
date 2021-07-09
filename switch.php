<?php

$mark = 75;
switch($mark){
    case($mark >=80 && $mark <=100) :
        echo "Congratulation !! You got A+";
        break;
    case($mark >=70 && $mark <=79) :
        echo "Congratulation !! You got A";
        break;
    case($mark >=60 && $mark <=69) :
        echo "Congratulation !! You got A-";
        break;
    case($mark >=50 && $mark <=59) :
        echo "Congratulation !! You got B";
        break;
    case($mark >=40 && $mark <=49) :
        echo "Congratulation !! You got C";
        break;
    case($mark >=33 && $mark <=39) :
        echo "Congratulation !! You got D";
        break;
    case($mark >=0 && $mark <=32) :
        echo "Sorry !! You got F";
        break;
    default :
        echo "Invalide Number";


}


?>