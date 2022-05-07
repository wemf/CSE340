<?php
// Remove the above three lines if you don't want to use Enviroment Variables (you could skip composer)
require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->safeLoad();

function phpmotorsConnect(){
    $server = $_ENV["DB_SERVER"];
    $dbname= $_ENV["DB_NAME"];
    $username = $_ENV["DB_USERNAME"];
    $password = $_ENV["DB_PASSWORD"];
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
