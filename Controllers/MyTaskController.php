<?php
namespace MVC\Controllers;
use MVC\Models\TaskRepository;
use MVC\Core\Controller;
class MyTaskController extends Controller
{
    public $taskrepository;
    // public function __construct(){
    //     $this->taskrepository = new TaskRepository();
    // }
    public function index(){ 
        $MyTask = new TaskRepository();
        $d['myTask']= $MyTask->getAll('tasks');
        $this->set($d);
        print_r($this->set($d));
        $this->render('index');
    }
    public function create(){
        $MyTask = new TaskRepository();
        if(isset($_POST['title'])){
            $MyTask->create($_POST['title'],$_POST['description']);
            header("Location:" . WEBROOT . "MyTask/index");
        }
        $this->render('create');
    }
    public function edit($id){
        $MyTask = new TaskRepository();
        $d['task']=$MyTask->get($id,'tasks');
        // print_r($id);
       if(isset($_POST["title"])){
            if($MyTask->edit($id,$_POST['title'],$_POST['description'])){
                header("Location:" . WEBROOT . "MyTask/index");
            }
       }
        $this->set($d);
        $this->render('edit');
    }
    public function delete($id){
        $MyTask = new TaskRepository();
        if($MyTask->delete($id)){
            header("Location:" . WEBROOT . "MyTask/index");
        }
    }
}