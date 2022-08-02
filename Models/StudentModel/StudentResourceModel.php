<?php
namespace MVC\Models\StudentModel;
use MVC\Core\ResourceModel;
use MVC\Models\StudentModel\StudentModel;
class StudentResourceModel extends ResourceModel{
    protected $table;
    protected $id;
    protected $model;
     public function __construct(){
        parent::__init('student','id',new StudentModel());
     }
     
}