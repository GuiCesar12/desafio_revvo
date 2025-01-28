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
        try {
            $sql = "select * from cursos";
            $list = $this->connection->prepare($sql);
            $list->execute();
            return $list->fetchAll();
        } catch (\PDOException $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function find($id){
        try {
            $sql = "select * from cursos where id = :id";
            $list = $this->connection->prepare($sql);
            $list->bindValue(':id', $id);
            $list->execute();
            return $list->fetch();
        } catch (\PDOException $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function create($data){
        try {
            $sql = "insert into cursos(name,description,duration) values(:name,:description,:duration)";
            $create = $this->connection->prepare($sql);
            $create->bindValue(':name', $data['title']);
            $create->bindValue(':description', $data['description']);
            $create->bindValue(':duration', $data['duration']);
            $create->execute();
        } catch (\PDOException $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }

    public function update($data){
        try {
            $sql = "update cursos set name = :name, description = :description, duration = :duration where id = :id";
            $update = $this->connection->prepare($sql);
            $update->bindValue(':id', $data['id']);
            $update->bindValue(':name', $data['title']);
            $update->bindValue(':description', $data['description']);
            $update->bindValue(':duration', $data['duration']);
            $update->execute();
        } catch (\PDOException $e) {
            // Handle exception
            echo "Error: " . $e->getMessage();
        }
    }
    
}