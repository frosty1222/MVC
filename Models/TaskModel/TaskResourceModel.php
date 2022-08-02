<?php
namespace MVC\Models\TaskModel;
use MVC\Core\ResourceModel;
use MVC\Models\TaskModel\TaskModel;
class TaskResourceModel extends ResourceModel{
    protected $table;
    protected $id;
    protected $model;
    protected $taskModel;
     public function __construct(){
        parent::__init('tasks','id',new TaskModel());
     }
}