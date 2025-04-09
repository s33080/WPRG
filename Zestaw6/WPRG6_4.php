<?php
    function mnozenie($tab1, $tab2){
        if(count($tab1[0])!=count($tab2)){
            return "Error";
        }
        $answer = array(array(0,0),array(0,0),array(0,0));
        for($i = 0; $i < count($tab1); $i++){
            for($j = 0; $j < count($tab2[0]); $j++){
                for($m = 0; $m < count($tab1[0]); $m++){
                    $answer[$i][$j] += $tab1[$i][$m]*$tab2[$m][$j];
                }
            }
        }
        return $answer;
    }
    $tab1 = array(array(3,-4,5),array(2,-3,1), array(3,-5,-1));
    $tab2 = array(array(3,29),array(2,18),array(0,-3));
    $answer = mnozenie($tab1, $tab2);
    for($i = 0; $i < count($tab1); $i++){
        for($j = 0; $j < count($tab2[0]); $j++){
            echo $answer[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br><br>";
?>
