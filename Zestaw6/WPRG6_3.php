<?php
function seq($first, $n, $size) {
    if($size < 0) {
        echo "N must be positive!";
        return false;
    }
    if(!(is_numeric($first) && is_numeric($n) && is_numeric($size))) {
        echo "Parameters must be numeric!";
        return false;
    }
    echo "Arithmetic: ";
    for($i = 0; $i < $size; $i++) {
        echo $first+($i*$n);
        echo " ";
    }
    echo "<br>Geometric: ";
    echo $first;
    echo " ";
    for($i = 1; $i < $size; $i++) {
        if($n < 0){
            if($i % 2 == 0) {
                echo $first*pow(abs($n),$i);
                echo " ";
            }
            else{
                echo 0-($first*pow(abs($n),$i));
                echo " ";
            }
        }
        else{
            echo $first*pow($n,$i);
            echo " ";
        }
    }
}
seq(5,2,10);
echo "<br><br>";
seq(5,-2,10);
echo "<br><br>";
seq(-5,2,10);
echo "<br><br>";
seq(5,2.5,5);
echo "<br><br>";
seq(-5,2,-5);
echo "<br><br>";
seq(5, 2, "wow");
seq(5, "hsxh", "tf");
?>