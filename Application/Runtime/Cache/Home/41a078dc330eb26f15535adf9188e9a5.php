<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>高明松乐麻将机</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/gm_solor/Public/css/signin.css" rel="stylesheet">
    <link href="/gm_solor/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/gm_solor/Public/css//bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<link href="/gm_solor/Public/css/dashboard.css" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">高明松乐麻将机</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../Task/index">任务</a></li>
                <li><a href="../Customer/index">客户</a></li>
                <li><a href="#">账单</a></li>
                <li><a href="#">退出登陆</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="搜索客户...">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="../Customer/index">总览<span class="sr-only">(current)</span></a></li>
                <li><a href="../Task/index">任务</a></li>
                <li><a href="../Customer/index">客户</a></li>
                <li><a href="#">账单</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">产品</a></li>
                <li><a href="">货存</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <!--<ul class="nav nav-sidebar">-->
            <!--<li><a href="">Nav item again</a></li>-->
            <!--<li><a href="">One more nav</a></li>-->
            <!--<li><a href="">Another nav item</a></li>-->
            <!--</ul>-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">快速导航</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>新单</h4>
                    <span class="text-muted">新单</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>创建客户</h4>
                    <span class="text-muted">创建客户</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>创建任务</h4>
                    <span class="text-muted">创建任务</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>查看报表</h4>
                    <span class="text-muted">查看报表</span>
                </div>
            </div>

            <h2 class="sub-header">客户资料</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="col-md-1">序号</th>
                        <th class="col-md-1">客户姓名</th>
                        <th class="col-md-2">电话</th>
                        <th class="col-md-4">地址</th>
                        <th class="col-md-2">品牌机型</th>
                        <th class="col-md-2">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>王先生</td>
                        <td>159999536550</td>
                        <td>高明区三洲碧桂园xx座</td>
                        <td>松乐</td>
                        <td><a href="javascript:;">详细</a>&nbsp;<a href="javascript:;">删除</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
<!--<script src="/gm_solor/Public/js/angular.min.js"></script>-->
<script src="/gm_solor/Public/js/jquery.min.js"></script>
<script src="/gm_solor/Public/js/bootstrap.min.js"></script>
<!--<script src="/gm_solor/Public/js/angular-route.min.js"></script>-->
</body>
</html>