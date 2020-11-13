
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Sửa user</h5>
                <form method="post" action="/admin/?controller=user&action=update">
                    <div class="form-group form-check">
                        <input type="checkbox" name="is_admin" value="1" <?=$user['is_admin']==1?'checked':''?> class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Admin</label>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Quyền</label>
                        <select name="level" class="form-control">
                            <?php
                            foreach($rols as $key=>$level){
                                ?>
                                <option value="<?=$key?>" <?=$key==$user['level']?'selected':''?> ><?=$level?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?=$user['id']?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php


