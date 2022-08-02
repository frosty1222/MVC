<?php
namespace MVC\Controllers;
use MVC\Models\TaskModel\TaskRepository;
use MVC\Core\Controller;
use MVC\Models\TaskModel;
class MyTaskController extends Controller
{
    public function index(){ 
        $taskRepository = new TaskRepository();
        $d['myTask']= $taskRepository->getAll('tasks');
        $this->set($d);
        $this->render('index');
    }
    public function show($id){
        $taskRepository = new TaskRepository();
        $d['myTask']= $taskRepository->get($id);
        $this->set($d);
        $this->render('show');
    }
    public function create(){
        if(isset($_POST['title'])){
            $taskRepository = new TaskRepository();
            $model = new TaskModel();
            $model->setTitle($_POST['title']);
            $model->setDescription($_POST['description']);
            $model->setCreatedAt();
            $taskRepository->add($model);
            // $taskRepository->create($_POST['title'],$_POST['description']);
            header("Location:" . WEBROOT . "MyTask/index");
        }

        $this->render('create');
    }
    //edit function
    public function edit($id){
        $taskRepository = new TaskRepository();
        $d['task']=$taskRepository->get($id);
        if(isset($_POST["title"])){
            $model = new TaskModel();
            $model->setId($id);
            $model->setTitle($_POST['title']);
            $model->setDescription($_POST['description']);
            $model->setUpdated_at();
            $taskRepository->add($model);
            header("Location:" . WEBROOT . "MyTask/index");
        }
        $this->set($d);
        $this->render('edit');
    }
    public function delete($id){
        $taskRepository = new TaskRepository();
        if($taskRepository->delete($id)){
            header("Location:" . WEBROOT . "MyTask/index");
        }
    }
}