<?php
include_once "views/home/index.php";
$level = ADMIN_LEVELS;
?>
<div>
    <table class="table" style="margin-top: 60px; width: 100%; float: right">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th>is Admin</th>
            <th>level</th>
            <th></th>
        </tr>
        <?php
        foreach ($data as $row){
            ?>
            <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["name"]?></td>
                <td><?=$row["is_admin"]?></td>
                <td><?=$level[$row['level']]?></td>
                <td>
                    <?php
                    // chi super admin moi co quyen sua
                    if($admin['level']==1){
                    ?>
                    <a href="/admin?controller=user&action=edit&user_id=<?=$row['id']?>" class="btn btn-primary">Cấp quyền</a>
                    <a href="/admin?controller=user&action=delete&user_id=<?=$row['id']?>" class="btn btn-primary">Xóa</a>
                </td>

                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="/admin?controller=user&page=1">trang 1</a>
    <a href="/admin?controller=user&page=2">trang 2</a>
    <a href="/admin?controller=user&page=3">trang 3</a>
</div>
