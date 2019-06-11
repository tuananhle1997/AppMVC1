<?php
namespace MVC\Controllers;

use Mvc\Model\EmployeeModel;

class EmployeeController {


    public function index(){
        echo "<br>" . __METHOD__;

        $model = EmployeeModel();
        $result = $model->getAll();
        //include view
        include_once "mvc/view/employee/index.php";
    }

    public function create(){
        $errors = array();
        echo "<br>" . __METHOD__;
        //include view
        if (isset($_POST)&& !empty($_POST)){
            $model = new EmployeeModel;

            $status = $model->store($_POST);
            if ($status){
                header("Localhost:index.php");
                exit;
            }
            $errors[] = "Lưu thất bại";
        }
        include_once "mvc/view/employee/create.php";
    }

    public function edit() {
        $errors = array();
        echo "<br>" . __METHOD__;
        if (isset($_POST) && !empty($_POST)) {
            $model = new EmployeeModel();
            $status = $model->update($_POST);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $errors[] = "Sửa thất bại";
        }
        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];
            $model = new EmployeeModel();
            $employee = $model->getSingle($id);
        }
        include_once "mvc/view/employee/edit.php";
    }


    public function delete() {
        echo "<br>" . __METHOD__;
        $errors = array();
        if (isset($_POST) && !empty($_POST)) {
            $model = new EmployeeModel();
            $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
            $status = $model->delete($id);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $errors[] = "Xóa thất bại";
        }
        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];
            $model = new EmployeeModel();
            $employee = $model->getSingle($id);
        }
        include_once "mvc/view/employee/delete.php";
    }
}
