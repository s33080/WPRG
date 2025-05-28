<?php
$connect = new PDO("mysql:host=localhost;dbname=zad1_baza", "root", "");

$kwarenda2 =
    "CREATE TABLE IF NOT EXISTS Person (
    person_id INT AUTO_INCREMENT PRIMARY KEY,
    person_firstname VARCHAR(255) NOT NULL,
    person_secondname VARCHAR(255) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS Cars (
    cars_id INT AUTO_INCREMENT PRIMARY KEY,
    cars_model VARCHAR(255) NOT NULL,
    cars_price float NOT NULL,
    cars_day_of_purchase DATETIME NOT NULL,
    person_id INT NOT NULL,
    FOREIGN KEY (person_id) REFERENCES Person(person_id)
    );";


$result = $connect->query($kwarenda2);
if(!$result){
    echo "Błąd w zapytaniu";
}
else{
    echo "Sukces: tabela utworzona";
}
?>


