<?php


class Category
{

    public function insert($name,$parent_id,$active){
        $db = new Database();
        $insert =$db->insert("INSERT INTO categories (name,parent_id,active) VALUE ('$name',$parent_id,$active)");
        if($insert == 1){
            echo 'Them moi thanh cong';
        }else{
            echo 'co loi';
        }
    }
    function getParents(){
        $db = new Database();
        $rt = [];
        $db->query("SELECT * FROM categories WHERE parent_id =0");
        while ($row = mysqli_fetch_assoc($db->result)){
            $rt[] = $row;
        }
        return $rt;
    }
    function getCategories(){
        $db = new Database();
        $rt = [];
        $db->query("SELECT * FROM categories");
        while ($row = mysqli_fetch_assoc($db->result)){
            $rt[] = $row;
        }
        return $rt;
    }
    function getChildren($id){
        $db = new Database();
        $rt = [];
        $db->query("SELECT * FROM categories WHERE active=1 AND parent_id = $id");
        while ($row = mysqli_fetch_assoc($db->result)){
            $rt[] = $row;
        }
        return $rt;
    }
}