<?php

include_once "models/Users.php";

class Controller
{
    public $admin = [];
public function __construct()
{
    if(!isset($_SESSION['logged'])|| $_SESSION['logged'] !=1){
        header('location: /admin/?controller=auth&action=login');
        exit;
    }
    // Lay id admin tu SESSION
    $id = getValue("id","SESSION",0);
    // Lay thong tin admin
    $dbUser = new Users();
    $admin = $dbUser->getUserById($id);
    // kiem tra thong tin admin
    // neu khong ton tai trong admin thi xoa session
    if(empty($admin)){
        $_SESSION =[];
        session_destroy();
        header('location: /admin/?controller=auth&action=login');
        exit;
    }
    // neu tk chua duoc kich hoat
    if($admin['active'] !=1){
        echo 'tai khoan chua duoc kich hoat';
        echo '<a href="/admin?controller=auth&action=logout">Dang xuat</a>';
        exit();
    }
    // neu khon phai admin
    if($admin['is_admin'] !=1 || $admin['level'] <= 0){
        echo 'ban khon co quyen';
        echo '<a href="/admin/trangchu.php">Ve trang chu</a> hoac <a href="/admin?controller=auth&action=logout">Dang xuat</a>';
        exit();
    }
    $this->admin = $admin;
}
}