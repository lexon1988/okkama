<?php

$login='admin';
$password='123321';

if($login==$_POST['login'] AND $password==$_POST['password']){

    setcookie('acc','welcome');
    header("Location: admin/index.php");
}

if($_GET['acc']=="no"){

    echo "<font color='red'>Неверный логин или пароль!</font><hr>";
}

?>




<div style="max-width: 100px; height: auto; padding: 10px; border: 1px solid grey; margin: 0 auto; margin-top:200px; ">

<form action="login.php?acc=no" method="post">

    <input type="text" name="login" size="10" placeholder="Логин"><br><br>
    <input type="password" name="password" size="10" placeholder="Пароль"><br><br>
    <input type="submit" value="Отправить" style="width: 100%">
</form>


</div>




