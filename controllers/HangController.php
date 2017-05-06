<?php

require_once 'models/HangModel.php';
require_once 'views/HangView.php';

class HangController {

    private $model = null;
    private $view = null;

    public function __construct() {
        $this->model = new HangModel();
        $this->view = new HangView();
    }

    public function index() {
        $data = $this->model->getAlls();
        $this->view->index($data);
    }

    public function create() {
        $this->view->create(null);
    }

    public function doCreate() {

        $tenhang = $_POST['tenhang'];
        $hangsanxuat = $_POST['hangsanxuat'];
        $soluongcon = $_POST['soluongcon'];
        $giaban = $_POST['giaban'];


        if (!empty($tenhang) && !empty($hangsanxuat) && !empty($soluongcon) && !empty($giaban)) {
            $data = array(
                "tenhang" => $tenhang,
                "hangsanxuat" => $hangsanxuat,
                "soluongcon" => $soluongcon,
                "giaban" => $giaban
            );
            $isTrue = $this->model->create($data);
            if ($isTrue) {
                $this->index();
            } else {
                $error = "Kiểm tra lại dữ liệu nhập vào.";
                $this->view->create($error);
            }
        } else {
            $error = "Kiểm tra lại dữ liệu nhập vào.";
            $this->view->create($error);
        }
    }

    public function delete() {

        $mahang = $_GET['mahang'];
        if (!empty($mahang)) {
            $this->model->delete($mahang);
            $this->index();
        }
    }

    public function detail() {
        $mahang = $_GET['mahang'];
        if (!empty($mahang)) {
            $data = $this->model->detail($mahang);
            $this->view->detail($data);
        }
    }

    public function edit() {
        $mahang = $_GET['mahang'];
        if (!empty($mahang)) {
            $data = $this->model->detail($mahang);
            $this->view->edit($data);
        }
    }

    public function doEdit() {
        
    }

}
