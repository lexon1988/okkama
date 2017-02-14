<?php
include('admin/db.php');
$db=new Database();

$id=$_GET['id'];

$cats = $db->db_select("cats", "order by order_id asc");
$page_meta = $db->db_select("pages", "WHERE id='$id'");

?>


<html>
<head>
    <meta charset="utf-8">
    <title><?= $page_meta[0]['title']?></title>
    <meta name="keywords" content="<?= $page_meta[0]['key_meta']?>" />
    <meta name="description" content="<?= $page_meta[0]['desc_meta'] ?>" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>


<?php include ('widgets/menu.php'); ?>