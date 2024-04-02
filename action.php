<?php

session_start();
include 'conect.php';

$login = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "SELECT * FROM adm WHERE login='{$login}' AND senha='{$senha}'";

$result = mysqli_query($con, $query);
$row = mysqli_num_rows($result);

if (empty($login) || empty($senha)){
    header("location:index.html");
    exit();
}

 if ($row == 0){
     header('location:index.html');
     exit();
 } else if ($row > 0) {
     header('location:telaAdm.html');
     exit();
}
?>