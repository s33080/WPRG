<form action="WPRG8_2.php">
    <div>
        Podaj ciąg: <label><input name="ciag"></label>
    </div>
</form>
<?php
if(isset($_GET['ciag'])){
    $wynik = str_replace(array(chr(92),"/",":","*","?",chr(34),"<",">","|","+","-"), "", $_GET['ciag']);
    echo $wynik;
}
?>
