<!DOCTYPE html>
<html lang=>
<head>
    <meta charset="UTF-8">
    <title>WPRG5_1</title>
    <style>
        .flex-container{
            display: flex;
            justify-content: center;
            border: 2px solid;
            align-items: stretch;
            margin: 10px;
            width: 550px;
            height: 400px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #deb9de;
        }
        .column{
            text-align:center;
            background-color: peachpuff;
            border: 1px solid;
            border-color: aquamarine;
            margin: 15px;
            width: 200px;
            padding: 20px;
        }
        button{

        }
        input{
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <div class="column">
        <h2>Prosty</h2>
        <form action="" method="post">
            <input type="number" step="any" name="Prosty1">
            <select name="dzialanie" size="1">
                <option value="dodaj" selected>dodaj</option>
                <option value="odejmij">odejmij</option>
                <option value="pomnoz">pomnóż</option>
                <option value="podziel">podziel</option>
            </select>
            <input type="number" step="any" name="Prosty2">
            <input type="submit" name="oblicz_prosty" value="oblicz">
        </form>
        <?php echo dzialanie(); ?>
    </div>
    <div class="column">
        <h2>Złożony</h2>
        <form action="" method="post">
            <input type="number" step="any" name="Zlozony">
            <select name="dzialanie2" size="1">
                <option value="cos" selected>cos</option>
                <option value="sin">sin</option>
                <option value="tg">tg</option>
                <option value="bitodec">binarny na dziesiętny</option>
                <option value="dectobi">dziesiętny na binarny</option>
                <option value="dectohex">dziesiętny na szesnstkowy</option>
                <option value="hextodec">szesnastkowy na dziesiętny</option>
            </select>
            <input type="submit" name="oblicz_zlozony" value="oblicz">
        </form>
        <?php echo dzialanie2(); ?>
    </div>
</div>
</body>
</html>
<?php
function dodaj($a, $b) {
    return $a + $b;
}
function odejmij($a, $b) {
    return $a - $b;
}
function pomnoz($a, $b) {
    return $a * $b;
}
function podziel($a, $b){
    return $a / $b;
}
function cosinus($a){
    return cos($a) ;
}
function sinus($a){
    return sin($a) ;
}
function tangens($a){
    return tan($a) ;
}
function bitodec($a) {
    return bindec($a);
}
function dectobi($a){
    return decbin($a);
}
function dectohex($a){
    return dechex($a);
}
function hextodec($a){
    return hexdec($a);
}
function dzialanie(){
    if(isset($_POST['oblicz_prosty']) and is_numeric($_POST['Prosty1']) and is_numeric($_POST['Prosty2'])){
        $dzialanie = $_POST['dzialanie'];
        switch ($dzialanie) {
            case "dodaj":
                return(dodaj($_POST['Prosty1'], $_POST['Prosty2']));
            case 'odejmij':
                return(odejmij($_POST['Prosty1'], $_POST['Prosty2']));
            case 'pomnoz':
                return(pomnoz($_POST['Prosty1'], $_POST['Prosty2']));
            case 'podziel':
                return(podziel($_POST['Prosty1'], $_POST['Prosty2']));
            default:
                return "BŁĄD";
        }
    }
}
function dzialanie2(){
    if (isset($_POST['oblicz_zlozony'])) {
        $dzialanie2 = $_POST['dzialanie2'];
        switch ($dzialanie2) {
            case "cos":
                return(cos($_POST['Zlozony']));
            case "sin":
                return(sin($_POST['Zlozony']));
            case "tg":
                return(tan($_POST['Zlozony']));
            case "bitodec":
                return(bitodec($_POST['Zlozony']));
            case "dectobi":
                return(dectobi($_POST['Zlozony']));
            case "dectohex":
                return(dectohex($_POST['Zlozony']));
        }
    }
}