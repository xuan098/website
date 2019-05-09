<?php
//连接数据库方法

function connentDb()
{
    $conn = @mysqli_connect('localhost','root','');
    if ($conn) {
        //echo 'success';
        mysqli_select_db($conn,'data');
        echo '';
    } else {
        echo 'fail';
    }
    return $conn;
}
