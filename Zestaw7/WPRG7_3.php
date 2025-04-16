<?php
function zad3($a, $b, $c, $d){
    $x = $c;
    for($i = $a; $i < $b; $i++){
        $tab[$i] = $x;
        $x++;
        if($x > $d){
            $x = $c;
        }
    }
    return $tab;
}
print_r(zad3(5,16,2,4));
?>
