<?php
include('db.php');

$db = new Database();

$id=$_GET['id'];

$title=$arr['title']=$_POST['title'];
$cat_id=$arr['cat_id']=$_POST['cat_id'];
$keys_meta=$arr['keys_meta']=$_POST['keys_meta'];
$desc_meta=$arr['desc_meta']=$_POST['desc_meta'];
$text=$arr['text']=$_POST['text'];


$db->db_update("pages","set title='$title',cat_id='$cat_id',keys_meta='$keys_meta',desc_meta='$desc_meta',text='$text' WHERE id='$id'");

header('Location: pages_edit.php?id='.$id.'&status=ok');


?>