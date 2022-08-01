<?php
namespace MVC\Core;
use MVC\Config\Database;
use PDO;
class Model
    {
         function getProperties($sql){
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_BOTH);
         }
    }
?>