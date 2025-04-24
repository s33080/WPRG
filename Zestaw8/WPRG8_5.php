<form action="WPRG8_5.php">
    <div>
        Podaj ciąg: <label><input name="ciag"></label>
    </div>
</form>
<?php
if(isset($_GET['ciag'])){
    $po_przecinku =  explode(",",$_GET['ciag'])[1];
    echo strlen($po_przecinku);
}
?>
