<?php


class news
{
    public function insert($title,$picture,$sapo,$detail,$category_id,$active){
        $sql = "INSERT INTO news (title,picture,sapo,detail,category_id,active) VALUE ('$title','$picture','$sapo','$detail',$category_id,$active)";

        $db = new Database();

        $insert =$db->insert($sql);
        if($insert == 1){
            echo 'Them moi thanh cong';
        }else{
            echo 'co loi';
        }

    }
    public function listing(){

    }
    public function update(){

    }
    public function delete(){

    }
}