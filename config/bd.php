<?php

function connect_database(){
    try 
    {
        $dbh = new PDO('mysql:host=localhost;dbname=meubanco', 'developer', 'vertrigo', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $dbh;
    } 
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
}

function disconnect() {

}