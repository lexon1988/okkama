<?php

include("header.php");
include("db.php");
$db = new Database();
$pages = $db->db_select("pages", "order by id desc");
$pages_count = count($pages);
//Фкнкция добывает имя категории через cat_id страницы
function getcat($id)
{
    $db = new Database();
    $cat = $db->db_select("cats", "WHERE id='$id'");
    return $cat[0]['cat'];
}


?>

    <div class="container_admin" style="width: 90%;">
        <a href="pages_new.php">
            <div class="btn btn-success" style="width: 100%">Добавить новую статью</div>
        </a>

        <br><br>


        <table class="table table-bordered">
            <tr>

                <th>Заголовок</th>
                <th>Категория</th>
                <th>Порядок</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php

            if ($pages_count <> 0) {

                foreach ($pages as $page) {
                    ?>
                    <tr>
                        <td><?= $page['title'] ?></td>
                        <td><?= getcat($page['cat_id']) ?></td>

                        <form action="pages_order_update.php?id=<?= $page['id'] ?>" method="post">
                            <td>

                                <input type="text" name="order_id" class="form-control" value="<?= $page['order_id'] ?>"
                                       size="2">

                            </td>
                            <td>
                                <input type="submit" value="Изменить" class="btn btn-primary">


                            </td>
                        </form>
                        <td>
                            <a href="pages_edit.php?id=<?= $page['id'] ?>">
                                <div class="btn btn-success">Редактировать</div>
                            </a>
                        </td>
                        <td>
                            <a href="pages_delete.php?id=<?= $page['id'] ?>">
                                <div class="btn btn-danger">Удалить</div>
                            </a>
                        </td>
                    </tr>
                    <?php

                }
            } else {

                echo "<font color='red'>Статей в базе нет !</font><br><br>";

            }
            ?>
        </table>

    </div>

<?php


include("footer.php");
?>