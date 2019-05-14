<?php
require_once 'admin_conn.php';
session_start();
$username = $_SESSION['username'];
//setcookie('$username');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>admin</title>
</head>
<style>
    body {
        padding-top: 70px;
        padding-left: 50px;
        margin: 0px;
    }

</style>
<body>
<!--后台界面-->
<!--顶部导航-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="admin.php" class="navbar-brand"><p style="font-size: 30px">admin</p></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost/website/"><p style="font-size: 25px">index</p></a></li>
                <li><a href="#"><p style="font-size: 25px">about</p></a></li>
                <li><a href="#"><p style="font-size: 25px">
                            <?php
                            echo $username;
                              ?>
                        </p></a></li>
                <li><a href="session_destroy.php"><p style="font-size: 25px">
                            exit
                        </p></a></li>
            </ul>
        </div>
    </div>
    <!-- <div>
     <ul class="nav nav-pills">
         <li role="presentation" class="active"><a href="http://localhost/website/">index</a></li>
         <li role="presentation"><a href="#">about</a></li>
         <li role="presentation"><a href="">help</a></li>
     </ul>
 </div>-->
    </div>
</nav>
<!--左侧功能导航-->
<div class="row" class="container">
<div style="padding: ;height:100%;width:15%;background-color: ; border:1px solid #000;" class="col-md-1">
<div style="padding: 0px 15px; width: 100%"><h3>MANAGE USER</h3></div>
<div class="list-group">
    <a type="button" class="list-group-item" href="admin_select_user.php">SELECT ALL USER</a>
    <a type="button" class="list-group-item" href="admin_alter_user.php">ALTER USER</a>
    <a type="button" class="list-group-item" href="admin_del_user.php">DELETE USER</a>
    <br>
    <br>
    <br>
</div>
    <!--<div style="height: 100%; width: 100%; "></div>-->
<div style="padding: 0px 15px ; width: 100%"><h3>MANAGE VIDEO</h3></div>
<div class="list-group" >
    <button type="button" class="list-group-item"> SELECT ALL VIDEO</button>
    <button type="button" class="list-group-item">2</button>
    <button type="button" class="list-group-item">3</button>
    <button type="button" class="list-group-item">4</button>
    <button type="button" class="list-group-item">5</button>
</div>
<div style="padding: 0px 15px; width: 100%;"><h3>3</h3></div>
<div class="list-group">
    <button type="button" class="list-group-item">1</button>
    <button type="button" class="list-group-item">2</button>
    <button type="button" class="list-group-item">3</button>
    <button type="button" class="list-group-item">4</button>
    <button type="button" class="list-group-item">5</button>
</div>
    <!-- style="padding: 10px 20px; width: 100%"-->
    <!--<div style=" padding: 10% height: 100%;width:95%;background-color: #e4b9c0; border:1px solid #000 " id="one.one"></div>-->
</div>

</body>
</html>