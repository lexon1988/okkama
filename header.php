<?php
include('admin/db.php');
$db=new Database();

$cats = $db->db_select("cats", "order by order_id asc");

?>


<html>
<head>
    <meta charset="utf-8">
    <title>Админка</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>


<?php include ('widgets/menu.php'); ?>