<?php
require_once('../app/models/PhieuDangKy.php');
class PhieuDangKyController {
    // hien thi phieu dang ky
    public function index() {
        require_once('../app/views/dangKy.php');
    }
    // hien thi danh sach da dang ky 
    public function showPhieuDangKy() {
        $danhSachPhieuDK = PhieuDangKy::getAll();
        require_once('../app/views/danhsach.php');
    }

    function createPhieuDangKy(){

        $hoten = $_POST['hoten'];
        $masinhvien = $_POST['mssv'];
        $chuyennganh = $_POST['chuyennganh'];
        $congty = $_POST['congty'];

        $isSuccess = PhieuDangKy::create($hoten, $masinhvien, $chuyennganh, $congty);
        if($isSuccess)        
            // Redirect to homepage
            header('Location: ?route=danh-sach');
        else 
            header('Location: ?route=failure');
        exit;

    }
  
}
