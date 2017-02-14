<?php

include("header.php");
include("db.php");
$db = new Database();

$cats=$db->db_select('cats','');

?>

<form action="pages_post.php" method="post">
    <div class="container_admin">

            <div class="col-xs-6">
                <input class="form-control" placeholder="Заголовок статьи" name="title" required>
            </div>

            <div class="col-xs-6">
                <select class="form-control"  placeholder="Категория"  name="cat_id" required>
                    <option value="" disabled selected>Категория</option>
                    <?php

                    foreach ($cats as $cat){
                    ?>

                    <option value="<?= $cat['id'] ?>"><?= $cat['cat'] ?></option>

                    <?php

                    }
                    ?>
                </select>
            </div>

        <br><br>

        <div class="col-xs-6">
            <textarea class="form-control" placeholder="Ключевые слова в мета" name="keys_meta"></textarea>
        </div>

        <div class="col-xs-6">
            <textarea class="form-control" placeholder="Описание  в мета"  name="desc_meta"></textarea>
        </div>

        <br><br><br><br>

        <div class="col-xs-12">
            <textarea  class='ckeditor' rows="10" cols="80" name="text" required></textarea>
        </div>


        <div class="col-xs-12">
            <br>
         <input type="submit" class="btn btn-success" value="Отправить" style="width: 100%">
        </div>

        </form>

    </div>
        <div class="col-xs-12">
            <?php
            include("footer.php");
            ?>
        </div>




