<?php
namespace MVC\Models\TaskModel;
use MVC\Core\ResourceModel;
use MVC\Config\Database;
use PDO;
class TaskRepository{
    public $myClass;
    public function __construct(){
      $this->myClass = new TaskResourceModel();
    }
    public function add($model){
        $this->myClass->save($model);
    }
    public function get($id){
       return  $this->myClass->getValueById($id);
    }
    public function delete($id){
        return $this->myClass->delete($id);
    }
    public function getAll($table){
      return $this->myClass->getAll($table);
    }
}