<?php
namespace MVC\Controllers;
use MVC\Core\Controller;
use MVC\Models\StudentModel\StudentRepository;
use MVC\Models\StudentModel\StudentModel;
class StudentController extends Controller {
  private $num;
   public function index(){
      $stdRepository = new StudentRepository();
      $g['Student'] = $stdRepository->getAll('student');
      $this->set($g);
      $this->render('index');
   }
   public function create(){
      if(isset($_POST['name'])){
        $stdRepository = new StudentRepository();
        $model= new StudentModel();
        $model->setName($_POST['name']);
        $model->setDate_Of_Birth($_POST['date_of_birth']);
        $model->setForm($_POST['form']);
        $model->setGender($_POST['gender']);
        $stdRepository->add($model);
        header("Location:" . WEBROOT . "Student/index");
      }
     $this->render('create');
   }
   public function edit($id){
      $stdRepository = new StudentRepository();
      $d['Student']=$stdRepository->get($id);
      if(isset($_POST["name"])){
        $model= new StudentModel();
        $model->setId($id);
        $model->setName($_POST['name']);
        $model->setDate_Of_Birth($_POST['date_of_birth']);
        $model->setForm($_POST['form']);
        $model->setGender($_POST['gender']);
        $stdRepository->add($model);
        header("Location:" . WEBROOT . "Student/index");
      }
      $this->set($d);
     $this->render('edit');
   }
   public function show($id){
    $stdRepository = new StudentRepository();
    $d['Student']= $stdRepository->get($id);
    $this->set($d);
    $this->render('show');
   }
   public function delete($id){
       $stdRepository = new StudentRepository();
        if($stdRepository->delete($id)){
            header("Location:" . WEBROOT . "Student/index");
        }
   }
   public function genderConvert($num){
     switch($num){
        case 1:
          return 'Male';
          break;
        case 2:
          return 'Female';
          break;
        case 3:
          return 'LGBT';
        break;
        default:
        return 'Unknown';
        break;
     }
   }
}