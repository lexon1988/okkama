<?php
include('db.php');

$db = new Database();

$arr['cat'] = $_POST['cat'];
$arr['order_id'] = $_POST['order_id'];

$db->db_insert("cats", $arr);

header('Location: cats.php');


?>