<?php
include('db.php');

$db = new Database();

$id = $_GET['id'];

$db->db_delete("cats", "WHERE id='$id'");

header('Location: cats.php');