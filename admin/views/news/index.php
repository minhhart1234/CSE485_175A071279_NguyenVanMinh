<?php
include_once "views/home/index.php";
?>
<div class="">
    <div class="">
    </div>

    <div class="" style="margin-top: 60px; width: 200px; float: right">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th>ID</th>
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
                <th><?=$row['id']?></th>
                <td><?=$row['title']?></td>
                <td><?=$row['picture']?></td>
                <td><?=$row['sapo']?></td>
                <td><?=$row['detail']?></td>
                <td><?=$row['category_name']?></td>
                <td><?=$row['active']?></td>
            </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>