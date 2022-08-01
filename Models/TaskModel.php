<?php
namespace MVC\Models;
use MVC\Core\Model;
class TaskModel extends Model{
    protected $title;
    protected $name;
   public function setTitle($title){
       $this->title = $title;
   }
   public function setName($name){
      $this->name = $name;
   }
  public function getTitle(){
      return $this->title;
   }
   public function getName(){
    return $this->name;
   }
   public function Properties(){
      $arrayModel=array([
         'title'=>$this->title,
         'name'=>$this->name,
      ]);
      return $arrayModel;
   }
}