<?php
namespace MVC\Models\TaskModel;
use MVC\Core\Model;
class TaskModel extends Model{
    private $id;
    private $title;
    private $description;
    private $created_at;
    private $updated_at;
   public function setId($id){
      $this->id = $id;
   }
   public function getId(){
      return $this->id;
   }
   public function setTitle($title){
       $this->title = $title;
   }
   public function setDescription($description){
      $this->description = $description;
   }
  public function getTitle(){
      return $this->title;
   }
   public function getDescription(){
    return $this->description;
   }
   public function setCreatedAt(){
      return $this->created_at = date('Y-m-d H:i:s');
   }
   public function getCreated_at(){
      return $this->created_at;
   }
   public function setUpdated_at(){
      return $this->updated_at = date('Y-m-d H:i:s');
   }
   public function getUpdated_at(){
      return $this->updated_at;
   }
}