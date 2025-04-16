<?php
function dodac_dolar ($tab, $n) {
    if(count($tab) < $n){
        return "BŁĄD";
    }
    array_splice($tab, $n, 0, "\$");
    return $tab;
}
$tab = array(0,1,2,3,4,5,6,7,8,9);
$n = 3;
$nowa_tab = dodac_dolar($tab, $n);
var_dump($nowa_tab);
?>