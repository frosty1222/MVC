<?php
namespace MVC\Models;
use MVC\Core\ResourceModel;
use MVC\Models\TaskModel;
class TaskResourceModel extends ResourceModel{
    public $table;
    public $id;
    public $model;
    public $taskModel;
     public function __construct($table = "",$id="",$model = ""){
        parent::__init($table,$id,new $model);
        $this->taskModel = new TaskModel();
     }
     public function Properties() {
        $model = $this->taskModel->Properties();
        $this->save($model);
     }
}