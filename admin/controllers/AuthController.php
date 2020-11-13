<?php
include_once "models/Users.php";


class AuthController

{
    public function register(){

        include_once "views/auths/register.php";

    }
    public function store(){
        $name = getValue('name','post');
        $email = getValue('email','post');
        $password = getValue('password','post');
        $is_admin = getValue('is_admin','post',0);
        $level = getValue('level','post',0);
        if($name !=""
        && $email !=""
        && $password !=""
        ){
            $db_user = new Users();
            // Kiem tra xem email da ton tai chua
            if($db_user->getUserByEmail($email) == 1){
                echo 'email da ton tai';
                exit;
            }else{
                $last_id = $db_user->insert($name,$email,$password,$is_admin,$level);
                if ($last_id >0) {
                    // dang nhap luon
                    $user = $db_user->getUser($email,$password);
                    $_SESSION['logged'] =1;
                    $_SESSION['id'] =$user['id'];
                    $_SESSION['name'] =$user['name'];
                    echo 'Them moi thanh cong';
                    header("location: /admin");
                } else {
                    echo 'co loi';
                }
            }



        }
}
    public function login(){

        $email = getValue('email','post');
        $password = getValue('password','post');
        $summit = getValue('summit','post',"");
        $message = "";
        if ($summit=='login'){
            $dbusers = new Users();
            $user = $dbusers->getUser($email,$password);
           if(!empty($user)){
               $_SESSION['logged'] =1;
               $_SESSION['id'] =$user['id'];
               $_SESSION['name'] =$user['name'];
               header("location: /admin");
           }else{
               $message = "email hoac mat khau sai";
           }
        }

        include_once "views/auths/login.php";


    }
    public function logout(){
        $_SESSION =[];
        session_destroy();
        header("location: /admin");
    }

}