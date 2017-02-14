<?php
include('db.php');

$db = new Database();

$id = $_GET['id'];
$order_id = $_POST['order_id'];

$db->db_update("pages", "set order_id='$order_id' WHERE id='$id'");

header('Location: pages.php');