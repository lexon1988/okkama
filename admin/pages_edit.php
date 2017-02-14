<?php

include("header.php");
include("db.php");
$db = new Database();

$id = $_GET['id'];

$cats = $db->db_select('cats', '');
$pages = $db->db_select("pages", "WHERE id='$id'");



?>



<form action="pages_update.php?id=<?= $id ?>" method="post">
    <div class="container_admin">

        <?php
        if($_GET['status']=='ok'){

            echo "<font color='#32cd32' size='5'>Запись обновлена!</font><br><hr>";
        }


        ?>

        <div class="col-xs-6">
            <input class="form-control" placeholder="Заголовок статьи" name="title" value="<?= $pages[0]['title'] ?>"
                   required>
        </div>

        <div class="col-xs-6">
            <select class="form-control" placeholder="Категория" name="cat_id" required>
                <option value="" disabled selected>Категория</option>
                <?php

                foreach ($cats as $cat) {
                    $selected = "";
                    if($cat['id']==$pages[0]['cat_id']){

                        $selected="selected";
                    }

                    ?>

                    <option value="<?= $cat['id'] ?>" <?= $selected ?>><?= $cat['cat'] ?></option>

                    <?php

                }
                ?>
            </select>
        </div>

        <br><br>

        <div class="col-xs-6">
            <textarea class="form-control" placeholder="Ключевые слова в мета" name="keys_meta"><?= $pages[0]['keys_meta']?></textarea>
        </div>

        <div class="col-xs-6">
            <textarea class="form-control" placeholder="Описание  в мета" name="desc_meta"><?= $pages[0]['desc_meta']?></textarea>
        </div>

        <br><br><br><br>

        <div class="col-xs-12">
            <textarea class='ckeditor' rows="10" cols="80" name="text" required><?= $pages[0]['text']?></textarea>
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




