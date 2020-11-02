<?php
include_once "views/layouts/header.php";
?>
<div class="row">
    <div class="col-md-2">
        <?php
        include_once "views/layouts/navbar.php"
        ?>
    </div>
    <div class="col-md-10">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">picture</th>
                <th scope="col">sapo</th>
                <th scope="col">detail</th>
                <th scope="col">Danh mục</th>
                <th scope="col">active</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($data as $key=>$row){
            ?>
            <tr>

                <th scope="row"><?=$key+1?></th>
                <td><?=$row['title']?></td>
                <td><?=$row['picture']?></td>
                <td><?=$row['sapo']?></td>
                <td><?=$row['detail']?></td>
                <td><?=$row['category_id']?></td>
                <td><?=$row['active']?></td>
            </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>