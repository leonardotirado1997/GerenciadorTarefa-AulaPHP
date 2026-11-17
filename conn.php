<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "task_manager";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    die("Erro na conexão!");
}