<?php
function pan($sentence){
    $letters = array_fill(0,26, false);
    $sentence = strtoupper($sentence);
    for($i = 0; $i < 26; $i++){
        for($j = 0; $j < strlen($sentence); $j++){
            if($sentence[$j] == chr(65 + $i)){
                $letters[$i] = true;
                break;
            }
        }
    }
    for($i = 0; $i < 26; $i++){
        if($letters[$i] == false){
            return false;
        }
    }
    return true;
}

$str ="The quick brown fox jumps over the lazy dog";
echo pan($str);
//echo "<br><br>";
//echo chr(65);
?>
