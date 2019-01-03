<?php
session_start();
$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$dbname = 'code.mu/engine';

$link = mysqli_connect($host, $user, $password, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");