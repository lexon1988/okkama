<div class="navbar">

    <div class="container_user">


        <?php


        foreach ($cats as $cat) {

            $cat_id = $cat['id'];
            $pages = $db->db_select("pages", "WHERE cat_id='$cat_id' order by order_id asc");
            $pages_count = count($pages);

            if ($pages_count == 1 AND $pages_count <> "") {
                ?>
                <div class="dropdown" style="float:left;">
                    <a href="<?= "page.php?id=" . $pages[0]['id'] ?>">
                        <button class="dropbtn"><?= $cat['cat'] ?></button>
                    </a>
                </div>

                <?php
            }


            if ($pages_count > 2) {

                $menu_link = $cat['cat'];
                ?>


                <div class="dropdown" style="float:left;">
                    <button class="dropbtn"><?= $menu_link ?></button>
                    <div class="dropdown-content" style="left:0;">

                        <?php

                        foreach ($pages as $page) {

                            ?>

                            <a href="page.php?id=<?= $page['id'] ?>"><?= $page['title'] ?></a>

                            <?php

                        }

                        ?>

                    </div>
                </div>


                <?php
            }


        }


        ?>

    </div>

</div>
