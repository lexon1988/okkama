<?php
include('db.php');

$db = new Database();

$id = $_GET['id'];

$cat = $_POST['cat'];
$order_id = $_POST['order_id'];

$db->db_update("cats", "set cat='$cat', order_id='$order_id' WHERE id='$id'");

header('Location: cats.php');