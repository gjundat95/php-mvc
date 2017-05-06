<?php

require_once 'controllers/HangController.php';
class Bootstrap {
    private $controller = null;
    
    public function __construct() {
        $this->controller = new HangController();
        $action = isset($_GET['action']) ? $_GET['action'] : null;
        if($action != null){
            if($action == 'none'){
                $this->controller->index();
            }
            if($action == 'create'){
                $this->controller->create();
            }
            if($action == 'doCreate'){
                $this->controller->doCreate();
            }
            if($action == 'delete'){
                $this->controller->delete();
            }
            if($action == 'detail'){
                $this->controller->detail();
            }
            if($action == 'edit'){
                $this->controller->edit();
            }
            if($action == 'doEdit'){
                $this->controller->doEdit();
            }
        } else {
            $this->controller->index();
        }
    }
}

