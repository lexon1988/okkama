<?php
include('db.php');

$db = new Database();


$arr['title']=$_POST['title'];
$arr['cat_id']=$_POST['cat_id'];
$arr['keys_meta']=$_POST['keys_meta'];
$arr['desc_meta']=$_POST['desc_meta'];
$arr['text']=$_POST['text'];







$db->db_insert("pages", $arr);

header('Location: pages.php');


?>