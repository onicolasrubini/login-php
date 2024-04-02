<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "login_atv";

$con = new mysqli($host, $username, $password, $db);

if ($con -> connect_errno){
    echo "Falha na Conexão:"
    (".$con->connect_errno.").$con->connect_errno;}
?>