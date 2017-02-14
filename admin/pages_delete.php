<?php
include('db.php');

$db = new Database();

$id = $_GET['id'];

$db->db_delete("pages", "WHERE id='$id'");

header('Location: pages.php');