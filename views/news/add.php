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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Them moi tin tuc</h5>
                    <form method="post" action="/admin/?controller=news&action=store" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Tieu de</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>

                        <div class="form-group">
                            <label for="picture">picture</label>
                            <input type="file" name="picture" class="form-control" id="picture">
                        </div>

                        <div class="form-group">
                            <label for="sapo">sapo</label>
                            <textarea name="sapo" class="form-control" id="sapo"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="editor">detail</label>
                            <textarea  name="detail" class="form-control" id="editor"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Danh muc</label>
                            <select name="category_id" class="form-control">
                                <?php
                                foreach ($categories as $row) {
                                    if ($row['has_children'] == 1) {
                                        ?>
                                        <optgroup label="<?= $row["name"] ?>">
                                            <?php
                                            foreach ($row['children'] as $child) {
                                                ?>
                                                <option value="<?= $child['id'] ?>"><?= $child['name'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </optgroup>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php
                                    }

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
<script >
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php

include_once "views/layouts/footer.php";

