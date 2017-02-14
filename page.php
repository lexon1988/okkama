<?php

include('header_page.php');

?>

<div class="container_user">

    <?php

    $id = $_GET['id'];
    $page = $db->db_select("pages", "WHERE id='$id'");

    ?>

    <h1><?= $page[0]['title'] ?></h1>

    <hr>

    <?= $page[0]['text'] ?>

</div>

<div class="container_user">
<?php

include('footer.php');

?>
</div>