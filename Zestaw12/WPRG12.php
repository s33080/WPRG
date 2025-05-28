<?php
$mysqli = new mysqli("localhost", "root", "", "zad1_baza");

    if($mysqli->connect_errno){
        echo "Connect failed: ". $mysqli->connect_errno ."<br>";
    }
    else{
        echo "Connected successfully <br>";
    }
    $kwarenda1="Create table if not exists Student(
    StudentID INTEGER PRIMARY KEY AUTO_INCREMENT,
    Firstname VARCHAR(255) NOT NULL,
    Secondname VARCHAR(255) NOT NULL,
    Salary INTEGER NOT NULL,
    DateOfBirth DATE NOT NULL);";

    $kwarenda2="DROP TABLE IF EXISTS Student;";

    $z = mysqli_query($mysqli, $kwarenda1);


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>WPRG12_1</title>
</head>
<style>
    .flex-container{
        flex-wrap: wrap;
        display: flex;
        border: 5px solid;
        border-color: #ffc9b9;
        background-color: peachpuff;
        width: 30rem;
        height: 14rem;
    }
    #guzik{
        display: flex;
        margin-left: 2rem;
    }
    .napis{
        text-align: center;
        width: 100%;
        //height: 30%;
    }

</style>
<body>
<?php if($z === true) : ?>
    <div class="flex-container">
        <p class="napis">Manage MySQL Table</p>
        <form method="get">
            <br>
            <div>
                <button type="submit" id="guzik" name="guzik">
                    DELETE TABLE
                </button>
            </div>
        </form>
        <?php
        if(isset($_GET["guzik"])){
        mysqli_query($mysqli, $kwarenda2);
        echo "<a href='WPRG12.php'>Tabela juz nie istnieje. Kliknij, żeby stworzyć ją na nowo!</a>";
        }
        ?>
    </div>
<?php endif; ?>
</body>
</html>
<?php
mysqli_close($mysqli);
?>