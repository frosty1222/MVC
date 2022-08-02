<?php
namespace MVC\Models\StudentModel;
class StudentRepository{
    public $stdResourceModel;
    public function __construct(){
        $this->stdResourceModel = new StudentResourceModel();
    }
    public function add($model){
        $this->stdResourceModel->save($model);
    }
    public function get($id){
       return  $this->stdResourceModel->getValueById($id);
    }
    public function delete($id){
        return $this->stdResourceModel->delete($id);
    }
    public function getAll($table){
      return $this->stdResourceModel->getAll($table);
    }
}