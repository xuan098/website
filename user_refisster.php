<?php


if (!isset($_POST['PhoneId'])||!isset($_POST['username'])||!isset($_POST['password'])){

}else{
    die('no');
}

//注册用户
/*@$id = $_POST['PhoneId'];
if (!empty($id)){

}else{
    die('no');
}*/
$username = $_POST['username'];
$password = $_POST['Password'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];

require_once 'user_conn.php';

$conn = connentDb();

//插入数据的sql语句
$sql = "INSERT INTO user (username,password,sex,email,address) VALUES ('$username','$password','$sex','$email','$address')";

mysqli_query($conn,$sql);

//echo $sql;

echo "id=".mysqli_insert_id($conn);
header('');




/*$squery = "INSERT INTO user VALUE  (?,?,?,?,?,?)";
$stmt = $conn->prepare($squery);
$stmt->bind_param("dsssss",$pId,$username,$password,$sex,$email,$address);
$stmt->execute();*/
//header('register.php');
?>


