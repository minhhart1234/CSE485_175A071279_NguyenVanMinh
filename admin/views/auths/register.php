<?php
include_once "views/layouts/header.php";
?>
<div class="row">
    <div class="col-md-2">
    </div>
    <form class="login-form" method="post" action="/admin/?controller=auth&action=store" enctype="multipart/form-data">
        <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
        </p>
        <div>
            <label for="title" style="color: white">Ho va Ten</label>
            <input type="text" name="name" class="form-control" id="title">
        </div>
        <div class="form-group" style="color: white">
            <label for="title">Email</label>
            <input type="email" name="email" class="form-control" id="title">
        </div>
        <div class="form-group" style="color: white">
            <label for="title">Password</label>
            <input type="password" name="password" class="form-control" id="title">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="active" value="1" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="underlay-photo"></div>
    <div class="underlay-black"></div>

