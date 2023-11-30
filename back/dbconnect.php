<?php 
    // Установка соединения с базой данных
    $host = 'localhost';
    $username = 'root';
    $password = 'root';
    $db_name = "factory";
    
    $connect = mysqli_connect($host, $username, $password, $db_name);
    if ($connect->connect_error) {
        die("Ошибка подключения к базе данных: " . $connect->connect_error);
    }
