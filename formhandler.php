<?php

require('Database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone_num"];
    $message = $_POST["message"];

    $db = new Database();
    $products = $db->query('INSERT INTO gamerstore.customer_service_forum (first_name, last_name, email, phone_num, message) 
    VALUES (:firstName, :lastName, :email, :phoneNumber, :message)', [
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':phoneNumber' => $phoneNumber,
        ':message' => $message,
    ]);


}else{

    header("Location: /test1/customerservice ");
}

