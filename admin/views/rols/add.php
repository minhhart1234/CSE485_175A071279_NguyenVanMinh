<?php
include_once "views/home/index.php";
?>
    <div class="" >
        <div class="">

        </div>
        <div class="" style="margin-top: 60px; width: 100%; float: right">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Thêm quyền</h5>
                    <form method="post" action="/admin/?controller=rol&action=create">
                        <div class="form-group">
                            <label for="name">Tên quyền</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
