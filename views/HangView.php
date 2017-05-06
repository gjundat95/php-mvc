<?php

class HangView {
    
    public function index($data){
        require_once 'tems/Index.php';
    }
    
    public function create($data){
        require_once 'tems/Create.php';
    }
    
    public function detail($data){
        require_once 'tems/Detail.php'; 
    }
    
    public function edit($data){
        require_once 'tems/Edit.php';
    }
}

