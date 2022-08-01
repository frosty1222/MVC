<?php
namespace MVC\Core;
use MVC\Core\ResourceModelInterface;
use MVC\Config\Database;
use PDO;
class ResourceModel extends Model implements ResourceModelInterface
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
      $arrayModel = $model;
      $stringModel = "title = :title,name = :name";
      $id =$arrayModel[$this->id];
      if($arrayModel[$this->id] == null){
        $sql = "INSERT INTO $this->table SET $stringModel ";
      }else{
        $sql = "UPDATE $this->table SET $stringModel where $this->id = $id";
      }
      $req = Database::getBdd()->prepare($sql);
      return $req->execute($arrayModel);
   }
   public function create($title,$description){
    $sql = "INSERT INTO tasks (title, description, created_at, updated_at) VALUES (:title, :description, :created_at, :updated_at)";

    $req = Database::getBdd()->prepare($sql);

    return $req->execute([
        'title' => $title,
        'description' => $description,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);
   }
   public function delete($id){
      $sql = "DELETE FROM tasks WHERE id = $id";
      $req = Database::getBdd()->prepare($sql);
      return $req->execute();
   } 
   public function getAll($table){
    $sql = "SELECT * FROM $table";
    // var_dump($req->fetchAll(PDO::FETCH_BOTH));
    return $this->getProperties($sql);
   }
   public function edit($id,$title,$description){
    $sql = "UPDATE tasks SET title = :title, description = :description , updated_at = :updated_at WHERE id = :id";

    $req = Database::getBdd()->prepare($sql);

    return $req->execute([
        'id' => $id,
        'title' => $title,
        'description' => $description,
        'updated_at' => date('Y-m-d H:i:s')

    ]);
   }
}