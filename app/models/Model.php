<?php
namespace app\models;
use app\models\Connection;

abstract class Model{
    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }
    public function all(){
        $sql = "select * from cursos";
        $list = $this->connection->prepare($sql);
        $list->execute();
        return $list->fetchAll();
    }
    
}