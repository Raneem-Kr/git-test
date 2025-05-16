<?php

$dns = "mysql:host=localhost;dbname=diabetes_diabetes";
$user = "diabetes_Raneem";
$pass = "RaneemCeline9622.";

try {
    $connect = new PDO($dns, $user, $pass);
} catch (PDOException $e) {
    echo "Failed To connect DB" . $e->getMessage();
}
