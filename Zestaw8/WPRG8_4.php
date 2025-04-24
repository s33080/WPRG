<form action="WPRG8_4.php">
    <div>
        Podaj ciąg: <label><input name="ciag"></label>
    </div>
</form>
<?php
if(isset($_GET['ciag'])){
    $wynik = substr_count($_GET['ciag'], 'a');
    $wynik += substr_count($_GET['ciag'], 'e');
    $wynik += substr_count($_GET['ciag'], 'i');
    $wynik += substr_count($_GET['ciag'], 'o');
    $wynik += substr_count($_GET['ciag'], 'u');
    echo $wynik;
}
?>
