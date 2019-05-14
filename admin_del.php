<?php

//删除用户信息

require_once 'admin_conn.php';

$conn = connentDb();

if (!empty($_GET['id'])){

}else{
    die('no');
}

$id = intval($_GET['id']);

$sql = "DELETE FROM user WHERE id = $id";

mysqli_query($conn,$sql);

if (mysqli_error($conn)){
    die('no');
}else{
    header('Location:admin_del_user.php');
}