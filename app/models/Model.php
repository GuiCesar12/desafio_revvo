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
    public function find($id){
        $sql = "select * from cursos where id = :id";
        $list = $this->connection->prepare($sql);
        $list->bindValue(':id',$id);
        $list->execute();
        return $list->fetch();
    }
    public function create($data){
        $sql = "insert into cursos(name,description) values(:name,:description)";
        $create = $this->connection->prepare($sql);
        $create->bindValue(':name',$data['name']);
        $create->bindValue(':description',$data['description']);
        $create->bindValue(':duration',$data['duration']);
        $create->execute();
    }
    
}