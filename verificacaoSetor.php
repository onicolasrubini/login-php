<?php
session_start();

if (!$_SESSION["setor"] == 'admin'){
    header('location:index.html');
    exit();
}?>