<?php
session_start();

if (!$_SESSION["login"]){
    header('location:index.html');
    exit();
}?>