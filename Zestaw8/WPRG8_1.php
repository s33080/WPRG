<form action="WPRG8_1.php">
    <div>
        Podaj ciąg: <label><input name="ciag"></label>
    </div>
</form>
<?php
    if(isset($_GET['ciag'])){
        echo strtoupper($_GET['ciag']);
        echo "<br>";
        echo strtolower($_GET['ciag']);
        echo "<br>";
        echo ucfirst($_GET['ciag']);
        echo "<br>";
        echo ucwords($_GET['ciag']);
    }
?>