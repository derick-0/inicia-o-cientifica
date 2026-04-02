<?php
define('HOST', 'localhost');
define('PORT', 3306);
define('USER', 'root');
define('PASS', '');
define('BASE', 'sistemamanual01');
$conn = new mysqli(HOST, USER, PASS, BASE, PORT);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
