<?php
namespace MVC\Controllers;

class EmployeeController {


    public function index(){
        echo "<br>" . __METHOD__;
        //include view
        include_once "mvc/view/employee/index.php";
    }

    public function create(){
        echo "<br>" . __METHOD__;
        //include view
        include_once "mvc/view/employee/create.php";
    }

    public function delete(){
        echo "<br>" . __METHOD__;
        //include view
        include_once "mvc/view/employee/delete.php";
    }

    public function edit(){
        echo "<br>" . __METHOD__;
        //include view
        include_once "mvc/view/employee/edit.php";
    }
}
