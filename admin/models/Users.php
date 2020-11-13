<?php


class Users
{
    public function insert($name, $email, $password, $is_admin=false, $level=0)
    {
        $db = new Database();

        $active=1;
        $password = md5($password);
        $insert = $db->insert("INSERT INTO users (name,email,password,is_admin,level,active) VALUE ('$name','$email','$password',$is_admin,$level,$active)");
       return $insert;
    }
    public function getUser($email,$password){
        $db = new Database();
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' and password ='$password' limit 1 ";
        $db->query($sql);
        if ($row=mysqli_fetch_assoc($db->result)){
            return $row;
        }
        return [];
    }
    public function getUserByEmail($email){
        $db = new Database();
        $sql = "SELECT * FROM users WHERE email = '$email'  ";
        $db->query($sql);
       if(mysqli_num_rows($db->result)>0){
           return 1;
       }
        return 0;
    }
    public function getUsers($page=1,$limit=30){
        if($page<1){
            $page = 1;
        }
        $position = ($page-1)*$limit;
        $sql = "SELECT * FROM users LIMIT $position,$limit";
        $db = new Database();

        $db->query($sql);
        $arrReturn = [];
        while ($row = mysqli_fetch_assoc($db->result)){
            $arrReturn[]= $row;
        }
        return $arrReturn;
    }
    public function getUserById($id){
        $db = new Database();
        $sql = "SELECT * FROM users WHERE id = $id ";
        $db->query($sql);
        $arrReturn = [];
       if($row=mysqli_fetch_assoc($db->result)){
           $arrReturn = $row;
       }
       return $arrReturn;
    }
    public function updateRol($id,$is_admin,$level){
        $db = new Database();
       return $db->update("UPDATE users SET is_admin=$is_admin,level=$level WHERE id=$id");
    }

    public function delete($id){
        $db = new Database();
        return $db->delete("DELETE FROM users WHERE id = $id");
    }
}