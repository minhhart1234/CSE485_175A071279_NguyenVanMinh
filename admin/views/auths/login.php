<?php
include_once "views/layouts/header.php";
?>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class=" warning">
        <?=$message?>
    </div>
    <form class="login-form" method="post" action="/admin/?controller=auth&action=login" enctype="multipart/form-data">
        <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
        </p>
        <input type="email" class="login-username" autofocus="true" required="true" placeholder="Email" name="email" class="form-control" id="title" value="<?=$email?>"/>
        <input type="password" class="login-password" required="true" placeholder="Password" name="password" class="form-control" id="title" value="<?=$password?>"/>
        <input type="hidden" name="summit" value="login" >
        <input type="submit" name="Login" value="Login" class="login-submit" />
    </form>
    <div class="underlay-photo"></div>
    <div class="underlay-black"></div>

</div>
</div>