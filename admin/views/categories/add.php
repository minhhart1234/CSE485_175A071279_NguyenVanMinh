<?php
include_once "views/home/index.php";
?>
<div class="" >
    <div class="">

    </div>
    <div class="" style="margin-top: 60px; width: 100%; float: right">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Thêm mới danh mục</h5>
                <form method="post" action="/admin/?controller=category&action=create">
                    <div class="form-group">
                        <label for="name">Danh mục</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Cấp cha</label>
                        <select name="parent_id" class="form-control">
                            <?php
                            foreach ($parents as $row){
                                ?>
                                    <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                    <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="active" value="1" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Active</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php



