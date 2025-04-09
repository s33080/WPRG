<html>
<body>
<form method="GET">
    a: <input type="number" step="any" name="a"><br>
    b: <input type="number" step="any" name="b"><br>
    <input type="submit" name="submit" value="zatwierdź">
</form>
<?php
function sito($a, $b){
    $tab = array_fill(0, $b+1, 0);
    $tab[0] = 1;
    $tab[1] = 1;
    for($i = 2; ($i*$i) <= $b; $i++){
        if($tab[$i] == 0){
            for($j = ($i*$i); $j<=$b; $j+=$i){
                $tab[$j] = 1;
            }
        }
    }
    for($i=$a; $i<=$b; $i++){
        if($tab[$i] == 0){
            echo $i;
            echo " ";
        }
    }
}
if(isset($_GET["submit"])){
    if($_GET["a"] < 0 || $_GET["b"] < 0){
        echo "Wartości a i b muszą być liczbami nieujemnymi!";
    }
    else if(is_numeric($_GET["a"]) && is_numeric($_GET["b"])){
        if($_GET["a"] > $_GET["b"]){
            sito(ceil($_GET["b"]), floor($_GET["a"]));
        }
        sito(ceil($_GET["a"]), floor($_GET["b"]));
    }
}
?>
</body>
</html>
