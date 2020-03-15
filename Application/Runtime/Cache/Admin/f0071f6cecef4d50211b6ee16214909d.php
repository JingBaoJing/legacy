<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>回复留言</title>
    <link href="/legacy1/Public/css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <script src="/legacy1/Public/js/jquery-3.4.1.js"></script>
    <script src="/legacy1/Public/js/bootstrap.js"></script>
</head>
<body>
<div class="header">
    <nav>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">非遗后台管理系统</a>
            </div>
            <!--Collect the nav linnks, forms, and other content for toggling-->
            <div class="collapse navbar-collapse navbar-ex1-collapse " id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/legacy1/Admin/Index/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 顾客管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy1/Admin/Guest/index">查看顾客信息</a></li>
                            <li><a href="/legacy1/Admin/Guest/searchguest">查询顾客</a></li>
                            <li><a href="/legacy1/Admin/Guest/searchorder">查看订单</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 商品管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy1/Admin/Goods/index">查看商品</a></li>
                            <li><a href="/legacy1/Admin/Goods/add">增加商品</a></li>
                            <li><a href="/legacy1/Admin/Goods/delete">删除商品</a></li>
                            <li><a href="/legacy1/Admin/Goods/revise">修改商品</a></li>
                            <li><a href="/legacy1/Admin/Goods/search">查询商品</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 旅游管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy1/Admin/Travel/index">查看旅游景点</a></li>
                            <li><a href="/legacy1/Admin/Travel/search">查询旅游景点</a></li>
                            <li><a href="/legacy1/Admin/Travel/add">增加旅游景点</a></li>
                            <li><a href="/legacy1/Admin/Travel/delete">删除旅游景点</a></li>
                            <li><a href="/legacy1/Admin/Travel/revise">修改旅游景点</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 信息管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="/legacy1/Admin/Notice/index">公告管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy1/Admin/Notice/index">查看公告</a></li>
                                    <li><a href="/legacy1/Admin/Notice/add">增加公告</a></li>
                                    <li><a href="/legacy1/Admin/Notice/delete">删除公告</a></li>
                                    <li><a href="/legacy1/Admin/Notice/revise">修改公告</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/legacy1/Admin/Dynamic/index" class="dropdown-toggle" data-toggle="dropdown">动态管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy1/Admin/Dynamic/index">查看动态</a></li>
                                    <li><a href="/legacy1/Admin/Dynamic/add">增加动态</a></li>
                                    <li><a href="/legacy1/Admin/Dynamic/delete">删除动态</a></li>
                                    <li><a href="/legacy1/Admin/Dynamic/revise">修改动态</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/legacy1/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">传承人管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy1/Admin/Inheritor/index">查看传承人</a></li>
                                    <li><a href="/legacy1/Admin/Inheritor/add">增加传承人</a></li>
                                    <li><a href="/legacy1/Admin/Inheritor/delete">删除传承人</a></li>
                                    <li><a href="/legacy1/Admin/Inheritor/revise">修改传承人</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/legacy1/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">政策管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy1/Admin/Policy/index">查看政策</a></li>
                                    <li><a href="/legacy1/Admin/Policy/add">增加政策</a></li>
                                    <li><a href="/legacy1/Admin/Policy/delete">删除政策</a></li>
                                    <li><a href="/legacy1/Admin/Policy/revise">修改政策</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 留言管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy1/Admin/Message/index">查看留言</a></li>
                            <li><a href="/legacy1/Admin/Message/reply">回复留言</a></li>
                            <li><a href="/legacy1/Admin/Message/check">审核留言</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy1/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>前台首页</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>个人设置</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>账户中心</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>我的收藏</a></li>
                        </ul>
                    </li>
                    <li><a href="/legacy1/Admin/Login/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>退出</a></li>
                </ul>
            </div>
        </nav>
    </nav>
</div>
<div class="container">
    <div class="row">
        <!--左侧目录-->
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <ul class="list-group">
                <li><a href="/legacy1/Admin/Message/index" class="list-group-item">查看留言</a></li>
                <li><a href="/legacy1/Admin/Message/reply" class="list-group-item active">回复留言</a></li>
                <li><a href="/legacy1/Admin/Message/check" class="list-group-item">审核留言</a></li>
            </ul>
        </div>
        <!--右侧主要内容-->
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <!--这里放置标题、选项-->
                    <h1>回复留言</h1>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul id="myTab" class="nav nav-tabs" role="tablist">
                                <li class="active">
                                    <a href="#bulletin" role="tab" data-toggle="tab">回复留言</a>
                                </li>
                            </ul>
                            <!--选项卡面板-->
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane active" id="bulletin">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr class="bg-primary">
                                            <th>留言内容</th>
                                            <th>留言人</th>
                                            <th>留言时间</th>
                                            <th>id</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-danger">
                                            <th scope="row">国内首个汽车资讯互动平台诞生</th>
                                            <td>李晓东</td>
                                            <td>2018/10/10</td>
                                            <td>
                                                <!--单按钮下拉-->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info">操作</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">编辑</a> </li>
                                                        <li><a href="#">删除</a> </li>
                                                        <li><a href="#">全局置顶</a> </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">爱奇艺10亿元资金成立创投联盟</th>
                                            <td>李小呱</td>
                                            <td>2017/01/10</td>
                                            <td>
                                                <div role="presentation" class="dropdown">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default">操作</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">编辑</a> </li>
                                                            <li><a href="#">删除</a> </li>
                                                            <li><a href="#">全局置顶</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <nav class="pull-right">
                                            <ul class="pagination">
                                                <li class="disabled">
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">1</a>
                                                </li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#">4</a>
                                                </li>
                                                <li>
                                                    <a href="#">5</a>
                                                </li>
                                                <li>
                                                    <a href="#">6</a>
                                                </li>
                                                <li><a href="#">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a> </li>
                                            </ul>
                                        </nav>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>