<?php
namespace MVC\Models;
use MVC\Core\ResourceModel;
use MVC\Config\Database;
class TaskRepository{
    public $myClass;
    public function __construct(){
      $this->myClass = new ResourceModel();
    }
    public function add($model){
        $this->myClass->save($model);
    }
    public function create($title,$description){
      $this->myClass->create($title,$description);
    }
    public function get($id,$table){
        $sql = "SELECT * FROM $table where id = $id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }
    public function delete($id){
        return $this->myClass->delete($id);
    }
    public function getAll($table){
      return $this->myClass->getAll($table);
    }
    public function edit($id,$title,$description){
      return $this->myClass->edit($id,$title,$description);
    }
}