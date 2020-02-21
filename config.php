<?php
try{
        $conn = new PDO("mysql:host=localhost;dbname=phpsystem;","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
}catch (PDOException $e){
    echo'ERROR: '.$e->getMessage();
}
