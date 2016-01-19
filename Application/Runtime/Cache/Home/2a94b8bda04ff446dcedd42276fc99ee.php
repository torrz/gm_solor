<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>松乐麻将机登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UCISS application"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Bootstrap -->
    <link href="/gm_solor/Public/css/signin.css" rel="stylesheet">
    <link href="/gm_solor/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/gm_solor/Public/css//bootstrap-theme.min.css" rel="stylesheet" media="screen">

</head>
<body>
<div class="container">

    <form class="form-signin">
        <h2 class="form-signin-heading">高明松乐麻将机后台</h2>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="用户名" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="密码" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> 记住我
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
    </form>

</div> <!-- /container -->

</div>
<script src="/gm_solor/Public/js/angular.min.js"></script>
<script src="/gm_solor/Public/js/jquery.min.js"></script>
<script src="/gm_solor/Public/js/bootstrap.min.js"></script>
<script src="/gm_solor/Public/js/angular-route.min.js"></script>
</body>
</html>