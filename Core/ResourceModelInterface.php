<?php
namespace MVC\Core;
Interface ResourceModelInterface{
   public function __init($table,$id,$model);
   public function save($model);
   public function delete($model);
}