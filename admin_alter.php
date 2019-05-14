<?php

//修改用户信息

require_once 'admin_conn.php';

$conn = connentDb();
/*if (!empty($_POST['id'])){

}else{
    die('no');
}*/

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['sex']) || empty($_POST['email']) || empty($_POST['address'])) {
    die('no');
}

$id = intval($_POST['id']);

$username = $_POST['username'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "UPDATE user SET username = '$username',password = '$password',sex = '$sex',email = '$email',address = '$address' WHERE id= $id";

mysqli_query($conn, $sql);

echo $sql;

if (mysqli_error($conn)) {
    die(mysqli_error($conn));
} else {
    header('Location:admin_alter_user.php');
}
