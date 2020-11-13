<?php


class Rol
{

    public function insert($name){
        $db = new Database();
        $insert =$db->insert("INSERT INTO rols (name) VALUE ('$name')");
        if($insert == 1){
            echo 'Them moi thanh cong';
        }else{
            echo 'co loi';
        }
    }
    public function getRols(){
        $db = new Database();
        $db->query("SELECT * FROM rols");
        $rt = [];
        while($row=mysqli_fetch_assoc($db->result)){
            $rt[] = $row;
        }
        return $rt;
    }
}