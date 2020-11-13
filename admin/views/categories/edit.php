
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Sua danh muc</h5>
                    <form method="post" action="/admin/?controller=category&action=edit">
                        <div class="form-group">
                            <label for="name">Danh muc</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Cap cha</label>
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


