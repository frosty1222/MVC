<?php
namespace MVC\Core;
use MVC\Core\ResourceModelInterface;
use MVC\Config\Database;
use PDO;
class ResourceModel implements ResourceModelInterface
{
private $table;
private $id;
private $model;
public function __init($table,$id,$model){
   $this->table = $table;
   $this->id = $id;
   $this->model = $model;
}

public function save($model){
   $arrayModel = $model->getProperties();
   $newConvert = array_reduce(array_keys($arrayModel),function ($carry,$item){
      return $carry.$item.'=:'.$item.',';
   });
         $arrayModeKey = rtrim($newConvert,",");
         $id =$arrayModel['id'];
      if(isset($arrayModel['id']) == null){
         $sql = "INSERT INTO $this->table SET $arrayModeKey";
         }else{
         $sql = "UPDATE $this->table SET $arrayModeKey where id = $id";
         }
      $req = Database::getBdd()->prepare($sql);
      return $req->execute($arrayModel);
}
public function delete($id){
   $sql = "DELETE FROM $this->table WHERE id = $id";
   $req = Database::getBdd()->prepare($sql);
   return $req->execute();
} 
public function getAll($table){
   $sql = "SELECT * FROM $this->table";
   $req = Database::getBdd()->prepare($sql);
   $myClass = get_class($this->model);
   $req->execute();
   return $req->fetchAll(PDO::FETCH_CLASS,$myClass);
}
   // get value by the id function
public function getValueById($id){
      $myClass = get_class($this->model);
      $sql = "SELECT * FROM $this->table where id = $id";
      $req = Database::getBdd()->prepare($sql);
      $req->execute();
      return $req->fetchObject($myClass);
}
}