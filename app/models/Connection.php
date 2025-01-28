<?php
namespace app\models;
use PDO;
class Connection{
    public static function connect(){
        $config = require "app/database/config.php";
        // $pdo = new PDO("mysql:host=localhost;dbname=projeto;charset=utf8","root","");
        $pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}",$config['username'],$config['password']);

        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $pdo;
    }
}