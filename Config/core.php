<?php
namespace MVC\Config;
use MVC\Core\Controller;
use MVC\Config\Database;
use MVC\Core\Model;
class Core{
    public function __construct(){
        $controller = new Controller();
        $model = new Model();
        $database = new Database();
    }
}
// require(ROOT . "Core/Model.php");
// require(ROOT . "Core/Controller.php");
?>