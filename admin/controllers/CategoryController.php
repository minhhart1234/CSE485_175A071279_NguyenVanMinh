<?php

include_once "models/Category.php";
include_once "Controller.php";

class CategoryController extends Controller
{
    public function index(){
        $admin = $this->admin;
        // check quyen
        if($admin['level'] ==2 ){
        exit('ko co quyen');
        }
        $categories = new Category();
        $data = $categories->getCategories();
        include_once "views/categories/index.php";
    }public function add(){
        $categories = new Category();
        $parents = $categories->getParents();
    include_once "views/categories/add.php";
}
    public function create(){
      $name = getValue('name' ,'post');
      $parent_id = getValue('parent_id','post',0);
      $active = getValue('active','post',0);
      if($name !=""){
        $category = new Category();
        $category->insert($name,$parent_id,$active);
      }

    }
}