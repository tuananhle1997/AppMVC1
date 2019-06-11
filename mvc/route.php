<?php
namespace Mvc;
// nạp namespace

use Mvc\Controllers\EmployeeController;
use Mvc\Controllers\ErrorController;

class Route{

    public function run(){
        /**
         * url : index.php?controller=employee&action=index
         * $controller = new EmployeeController();
         * $controller->index();
         *
         * url : index.php?controller=employee&action=edit
         * $controller = new EmployeeController();
         * $controller->edit();
         *
         * url : index.php?controller=employee&action=delete
         * $controller = new EmployeeController();
         * $controller->delete();
         *
         * url : index.php?controller=employee&action=create
         * $controller = new EmployeeController();
         * $controller->create();
         * $_REQUEST = $_POST + $_GET
         * http://localhost/appmvc1/index.php?controller=employee&action=index
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=create
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=edit
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=delete
         */
        if ($_REQUEST["controller"]== "employee"){
            $controller = new EmployeeController();
            if ($_REQUEST["action"] == "index"){
                $controller->index();
            }
            if ($_REQUEST["action"] == "create"){
                $controller->create();
            }

            if ($_REQUEST["action"] == "edit"){
                $controller->edit();
            }

            if ($_REQUEST["action"] == "delete"){
                $controller->delete();
            }
        }
    }
}