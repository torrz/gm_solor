<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>松乐麻将机登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UCISS application"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Bootstrap -->
    <link href="/gm_solor/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/gm_solor/Public/css//bootstrap-theme.min.css" rel="stylesheet" media="screen">

</head>
<body>
<div ng-app="">
    <p>名字 : <input type="text" ng-model="name"></p>
    <h1>Hello {{name}}</h1>
</div>

<script src="/gm_solor/Public/js/angular.min.js"></script>
<script src="/gm_solor/Public/js/jquery.min.js"></script>
<script src="/gm_solor/Public/js/bootstrap.min.js"></script>
<script src="/gm_solor/Public/js/angular-route.min.js"></script>
</body>
</html>