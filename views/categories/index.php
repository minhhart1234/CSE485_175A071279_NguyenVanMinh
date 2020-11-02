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
                <th scope="col">Name</th>
                <th scope="col">parent</th>
                <th scope="col">active</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php

             foreach ($data as $key=>$row){

                 ?>
                 <tr>
                     <th scope="row"><?=$key+1?></th>
                     <td><?=$row['name']?></td>
                     <td><?=$row['parent_id']?></td>
                     <td><?=$row['active']?></td>
                     <td>
                         <a href="/admin/views/categories/edit.php/?controller=category&action=edit&id=<?=$row['id']?>" class="btn-warning btn-sm">sua</a>
                         <a href="/admin/views/categories/?controller=category&action=delete&id=<?=$row['id']?>" class="btn-warning btn-sm">xóa</a>
                     </td>
                 </tr>
                 <?php
             }
            ?>

            </tbody>
        </table>
    </div>
</div>
<?php

include_once "views/layouts/footer.php";

