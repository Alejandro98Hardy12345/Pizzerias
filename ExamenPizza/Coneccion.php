<?php
$sever = 'localhost';
$username = 'root';
$password = '';
$database = 'pizzeria';
try{
    $mysqli= new mysqli($sever,$username,$password,$database);    
}catch (PDOException $e){
    die('Connected failed: '.$e->getMessage());
}
?>