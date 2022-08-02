<?php
namespace MVC\Models\StudentModel;
use MVC\Core\Model;
class StudentModel extends Model{
    private $id;
    private $name;
    private $form; 	
    private $date_of_birth;
    private $gender;
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setForm($form){
        $this->form = $form;
    }
    public function getForm(){
        return $this->form;
    }
    public function setDate_Of_Birth($date_of_birth){
        $this->date_of_birth = $date_of_birth;
    }
    public function getDate_Of_Birth(){
        return $this->date_of_birth;
    }
    public function setGender($gender) {
        $this->gender = $gender;
    }
    public function getGender(){
        return $this->gender;
    }
}