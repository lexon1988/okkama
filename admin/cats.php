<?php

include("header.php");
include("db.php");
$db = new Database();

?>

    <div class="container_admin">

        <div class="col-xs-8">

        </div>
        <div class="col-xs-2">



        </div>
        <div class="col-xs-1">

        </div>

        <form action="cats_post.php" method="post">

            <div class="col-xs-8">
                <input name="cat" size="30" class="form-control" placeholder="Название новой категории">
            </div>
            <div class="col-xs-2">
                <input name="order_id" size="1" class="form-control" placeholder="1,2,3" title="Порядковый номер, при выводе категорий в том числе и в меню">


            </div>
            <div class="col-xs-1">
                <input type="submit" class="btn btn-success" value="Добавить">
            </div>

        </form>
        <br><br>
        <hr>
        <?php


        $cats = $db->db_select('cats', 'order by order_id asc');

        if ($cats == "") {
            echo "<font color='red'>На данный момент, категорий нет.</font>";
        }else{

        foreach ($cats as $cat) {

            ?>

            <form action="cats_update.php?id=<?= $cat['id']; ?>" method="post">

                <div class="col-xs-6">
                    <input name="cat" size="30" class="form-control" placeholder="Название новой категории"
                           value="<?= $cat['cat']; ?>">
                </div>
                <div class="col-xs-2">
                    <input name="order_id" size="1" class="form-control" placeholder="#1"
                           value="<?= $cat['order_id']; ?>">
                </div>
                <div class="col-xs-2">
                    <input type="submit" class="btn btn-primary" value="Изменить">

                </div>

                <div class="col-xs-2">

                    <a href="cats_delete.php?id=<?= $cat['id']; ?>">
                        <div class="btn btn-danger">Удалить</div>
                    </a>
                </div>
                <br><br>
            </form>


            <?php

        }
}
        ?>

    </div>

<div class="col-xs-12">
    <?php
    include("footer.php");
    ?>
</div>