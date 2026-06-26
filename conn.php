<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "task_manager";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    die("Erro na conexão!");
}