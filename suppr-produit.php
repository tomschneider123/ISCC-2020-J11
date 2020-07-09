<?php

function connect_to_database()
{
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "BaseTest01";

try
{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    insert_into("id8");
    value("T-shirt noir", "t-shirt coton de couleur noir", "15.50","10");
    $sql = "DELETE FROM produit WHERE id = 8";
    return $pdo;

}

}



?>