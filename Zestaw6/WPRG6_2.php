<?php
function sum($number){
    if(!is_numeric($number)){
        return "Parameter must be numeric!";
    }
    $number = abs($number);
    while($number - round($number) != 0){
        $number*=10;
    }
    $answer = 0;
    while($number > 0){
        $answer = $answer + ($number % 10);
        $number/=10;
    }
    if($answer > 9){
        $answer=sum($answer);
    }
    return $answer;
}
    echo sum(91.17);
    echo " ";
    echo sum(-5.5192);
    echo " ";
    echo sum(5210.5);
    echo " ";
    echo sum(":)");
?>