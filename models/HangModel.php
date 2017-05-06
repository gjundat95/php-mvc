<?php

require_once 'libs/Database.php';

class HangModel {

    private $con = null;

    public function __construct() {
        $this->con = Database::connect();
    }

    public function getAlls() {
        $sql = 'select * from hangs';
        $stmt = $this->con->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        $stmt = $stmt->fetchAll();
        return $stmt;
    }

    public function create($data): bool {
        $sql = 'Insert Into hangs(mahang,tenhang,hangsanxuat,soluongcon,giaban) Values(?,?,?,?,?)';
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array(null, $data['tenhang'], $data['hangsanxuat'], $data['soluongcon'], $data['giaban']));
        if ($stmt->rowCount())
            return true;
        return false;
    }

    public function delete($data) {
        $sql = 'Delete from hangs where mahang=' . $data;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
    }

    public function get($data) {
        
    }

    public function detail($data) {
        $sql = 'Select * from hangs where mahang=?';
        $stmt = $this->con->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute(array($data));
        $stmt = $stmt->fetchAll();
        return $stmt;
    }

}
