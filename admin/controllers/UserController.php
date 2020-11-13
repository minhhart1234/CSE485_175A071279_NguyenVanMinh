<?php
include_once "models/Rol.php";
include_once "models/Users.php";
include_once "Controller.php";

class UserController extends Controller
{
    public function index(){
        $admin = $this->admin;
        $page=getValue("page","get",1);
        $limit = 20;
        $users = new Users();
        $data = $users->getUsers($page,$limit);
        include_once "views/user/index.php";
    }
    public function create(){
        $name = getValue('name' ,'post');
        $password = getValue('password','post');
        if($name !=""){
            $users = new Users();
            $users->insert($name);
        }

    }
    public function delete(){
        $admin = $this->admin;

        if($admin['level'] !=1){
            exit('khong co quyen');
        }
        $user_id = getValue("user_id",'get',0);
        $userModal = new Users();
        // CHeck ton tai
        $user = $userModal->getUserById($user_id);
       if(empty($user)){
           exit('User khong ton tai');
       }
        if( $user['level']!=0 &&($admin['level'] >= $user['level'])){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit('ban khong co quyen xoa user co level lon hon hoac bang level cua ban');
        }

        $delete = $userModal->delete($user_id);
        if($delete>0){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit("Có $delete bản ghi được xóa ");

        }else{
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit("Không xóa được bản ghi này");
        }

    }
    public function edit(){
        $admin = $this->admin;
        if($admin['level'] !=1){
            exit('khong co quyen');
        }
        $user_id = getValue("user_id","get",0);
        $dbuser = new Users();
        $user = $dbuser->getUserById($user_id);

        $rols = [0=>'Chưa cấp quyền'];
        foreach(ADMIN_LEVELS as $key=>$value){
            if($key>$admin['level']){
                $rols[$key] = $value;
            }
        }
        if(empty($user)){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit('Khong ton tai user');
        }
        if($user['level']!=0 && ($admin['level'] >= $user['level'])){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit('ban khong co quyen sua user co level lon hon hoac bang level cua ban');
        }
        include_once "views/user/edit.php";
    }
    public function update(){
        $admin = $this->admin;
        if($admin['level'] !=1){
            exit('khong co quyen');
        }
        $id=getValue("id","POST",0);
        $is_admin=getValue("is_admin","POST",0);
        $level=getValue("level","POST",0);
        $dbUser = new Users();

        $user = $dbUser->getUserById($id);
        if(empty($user)){
            exit("user khong ton tai");
        }
        if($user['level']!=0 &&($admin['level'] >= $user['level'])){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit('ban khong co quyen sua user co level lon hon hoac bang level cua ban');
        }
        if($user['level']!=0 &&($admin['level'] >= $level)){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit('Ban khong duoc phep cap quyen lon hon hoac bang quyen cua ban');
        }
        // check ton tai rol
        if(!isset(ADMIN_LEVELS[$level])){
            echo '<a href="/admin?controller=user">Về trang trước</a>';
            exit('Khong ton tai quyen nay');
        }
       $update = $dbUser->updateRol($id,$is_admin,$level);
       if($update>0){
           echo '<a href="/admin?controller=user">Về trang trước</a>';
           echo 'thanh cong';
       }else{
           echo 'khong thanh cong';
       }

    }
}