<?php
include_once "models/Category.php";
include_once "models/News.php";
include_once "Controller.php";

class NewsController extends Controller
{
    public function index(){
        $page=getValue("page","get",1);
        $limit = 2;
        $dbNews = new News();
        $data = $dbNews->getNews($page,$limit);
        include_once "views/news/index.php";
    }
    public function add(){
        $dbCat = new Category();
        $categories = $dbCat->getParents();
        foreach($categories as $key=>$row){
           $children =$dbCat->getChildren($row['id']);
            $categories[$key]['children'] = $children;
            $categories[$key]['has_children'] = count($children)>0?1:0;
        }

        include_once "views/News/add.php";
    }
    public function store(){
        $title = getValue('title','post');
        $picture ="";
        $sapo = getValue('sapo','post');
        $detail = getValue('detail','post');
        $category_id = getValue('category_id','post',0);
        $active = getValue('active','post',0);

        // upload file
        if(isset($_FILES["picture"])){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["picture"]["name"]);
            $upload =  move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
            if($upload ==1){
                $picture = $_FILES["picture"]["name"];
            }
        }




        if($title !=""){
            $news = new News();
            $news->insert($title,$picture,$sapo,$detail,$category_id,$active);
        }else{
            echo 'thieu truong';
        }

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}