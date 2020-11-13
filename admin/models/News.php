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

    public function getNews($page=3,$limit=30){
        if($page<1){
            $page = 2;
        }
        $position = ($page-1)*$limit;
        $sql = "SELECT news.*, categories.name as category_name FROM news STRAIGHT_JOIN categories ON news.category_id = categories.id LIMIT $position,$limit";
        $db = new Database();
        $db->query($sql);
        $rt = [];
        while ($row = mysqli_fetch_assoc($db->result)){
            $rt[] = $row;
        }
        return $rt;
    }
}