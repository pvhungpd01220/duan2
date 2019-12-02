<?php

$dns="mysql:host=localhost;dbname=polyshop";
    $username ='root';
    $password= '';
    $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $db= new PDO($dns, $username, $password, $option) or die("Can't connect to database");
    $db->exec("set names utf8");
?> 
 
