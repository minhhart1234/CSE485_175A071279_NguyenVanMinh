<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8" />
  <title>MVC</title>
  <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/admin/assets/css/style.css" />
  <link rel="stylesheet" href="/admin/assets/css/admin.css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <script type="text/javascript" src="/admin/assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="/admin/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/admin/assets/js/ckeditor.js"></script>
  <script type="text/javascript" src="/admin/assets/js/script.js"></script>
</head>
<body>
<div id="header">

    <div class="header black-bg">
        <?php

        if(!isset($_SESSION['logged']) || $_SESSION['logged'] !=1){
            ?>
            <a class="him" href="/admin?controller=auth&action=login">Login</a>
            <br/>
            <a class="him" href="/admin?controller=auth&action=register" >Register</a>
            <?php
        }else{
            $name = getValue("name","session");
            ?>
            <div style="color: white">Xin Chào <?=$name?></div>
            <a class="him" href="/admin?controller=auth&action=logout" style="float: right">Logout</a>
            <?php
        }
        ?>
    </div>
</div>