<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>register</title>
    <style>
        * {
            font-family: 'montserrat', sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            background: #333;
        }
        .login-box {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100vh; /* vh 视口高度 viewport height 百分比单位*/
            background-image: linear-gradient(
                    45deg,
                    #9fbaa8,
                    #31354c
            ); /*设置颜色渐变 方向(0deg垂直向上) 起点颜色 终点颜色*/
            transition: 0.4s; /*过度效果  property duration timing-function delay 默认属性:all 0 ease 0*/
        }
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /*定义 2D 转换8 */
            color: white;
            text-align: center;
        }
        .login-form h1 {
            font-weight: 400;
            margin-top: 0;
        }
        .txtb {
            display: block;
            box-sizing: border-box;
            width: 240px;
            background: #ffffff28;
            border: 1px solid white;
            padding: 10px 20px;
            color: white;
            outline: none;
            margin: 10px 0;
            border-radius: 6px;
            text-align: center;
        }
        .login-btn {
            width: 240px;
            background: #2c3e50;
            border: 0;
            color: white;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
        }
        .hide-login-btn {
            color: #000;
            position: absolute;
            top: 40px;
            right: 40px;
            cursor: pointer;
            font-size: 30px;
            opacity: 0.7;
            transform: rotate(45deg); /*定义 2D 转换8 */
        }
        .show-login-btn {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            border: 2px solid;
            padding: 10px;
            cursor: pointer;
        }
        .showed {
            left: 0;
        }
        .show-login-btn1 {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            border: 2px solid;
            padding: 10px;
            cursor: pointer;

        }
        .showed {
            left: 0;
        }
        a{
            text-decoration: none;
            color:#f4f4f4;
        }
    </style>
</head>
<body>
<!--用户注册-->
<div class="show-login-btn">
    -> 点此注册
</div>
<div class="show-login-btn1" href="index.php">
    <a href="http://localhost/website/">返回首页 <-</a>
</div>
<div class="login-box">
    <div class="hide-login-btn">
        +
    </div>
    <form action="user_refisster.php" method="POST" class="login-form">
        <h1>欢迎</h1>
        <!--<input class="txtb" type="text" name="PhoneID" placeholder="PhoneId" />-->
        <input class="txtb" type="text" name="username" placeholder="username"/>
        <input class="txtb" type="password" name="Password" placeholder="Password" />
        <input class="txtb" type="text" name="sex" placeholder="sex"/>
        <input class="txtb" type="email" name="email" placeholder="email"/>
        <input class="txtb" type="text" name="address" placeholder="address"/>
        <input class="login-btn" type="submit"  value="注册"  />
    </form>
</div>
<script type="text/javascript">
    function hasClass(element, clssname) {
        return element.className.match(new RegExp('(\\s|^)' + clssname + '(\\s|$)'))
    }
    function addClass(element, clssname) {
        if (!this.hasClass(element, clssname)) element.className += ' ' + clssname
    }
    function removeClass(element, clssname) {
        if (hasClass(element, clssname)) {
            var reg = new RegExp('(\\s|^)' + clssname + '(\\s|$)')
            element.className = element.className.replace(reg, ' ')
        }
    }
    function toggleClass(element, clssname) {
        if (hasClass(element, clssname)) {
            removeClass(element, clssname)
        } else {
            addClass(element, clssname)
        }
    }
    var loginBox = document.getElementsByClassName('login-box')
    var showBtn = document.getElementsByClassName('show-login-btn')
    var hideBtn = document.getElementsByClassName('hide-login-btn')
    showBtn[0].addEventListener('click', function() {
        toggleClass(loginBox[0], 'showed')
    })
    hideBtn[0].addEventListener('click', function() {
        toggleClass(loginBox[0], 'showed')
    })
</script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: xwr
 * Date: 2019/3/18
 * Time: 21:07
 */