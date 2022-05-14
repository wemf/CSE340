<?php

function phpmotorsConnect(){
    $server = "localhost";
    $dbname= "phpmotors";
    $username = "iClient";
    $password = "sj0LR1a9cgi7ZZd";
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch(PDOException $e) {
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}

phpmotorsConnect();
