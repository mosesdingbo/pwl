<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>漂物流</title>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/jquery.fancybox.css">
</head>
<body>
<div class="logo"></div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="search">
                <input class="search-input" type="text"></input>
                <button class="search-button" type="button"></button>
            </div>
            <div class="publish">
                <a href="__APP__/Publish/publish"><button type="button" class="publish-button"></button></a>
            </div>
        </div>
    </div>
    <nav class="navbar" role="navigation">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">商品分类 </a>
                </li>
                <li class="index"><a href="__APP__/Index/index">首页</a></li>
                <li class="my-info"><a href="__APP__/Myinfo/myinfo">我的二手</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="fancybox" href="#login">登陆</a></li>
                <li><a class="fancybox" href="#register">注册</a></li>
                <div id="login">
                    <div class="login-bg">
                        <div class="log-head">
                        </div>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="用户名/邮箱">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="密码">
                            </div>
                            <div class="input-group" id="password-action">
                                <input type="checkbox" id="remember-password">记住密码
                                <a href="#" id="forget-password">忘记密码？</a>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="log-button"></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="register">
                    <div class="reg-bg">
                        <div class="reg-head">
                            <img src="__PUBLIC__/images/reg-head.png" alt="注册头像">
                        </div>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="邮箱注册">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="请输入密码">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="重复密码" id="repeat-password">
                            </div>
                            <div class="input-group" id="protocol">
                                <input type="checkbox"> 我已经认真阅读<a href="#">《二手市场协议》</a>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="register-button"></button>
                            </div>
                        </form>
                    </div>
                </div>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">用户名 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="__APP__/Myinfo/myinfo">我的二手</a></li>
                        <li><a href="#">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script src="__PUBLIC__/js/jquery-2.1.1.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/jquery.fancybox.pack.js"></script>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
<script type="text/javascript">
    $('.carousel').carousel()
</script>

	<div class="container">
		<div class="row my">
			<div class="left">
				<div class="top">
					<div class="logo">
						<img src="__PUBLIC__/images/user-head.jpg" alt="user-head">
					</div>
					<div class="complete">
						<img src="__PUBLIC__/images/pencil.png" alt="资料"><a href="__APP__/Editinfo/editinfo">完善资料</a>
					</div>
					<div class="my-product">
						<img src="__PUBLIC__/images/store.png" alt="货架"><a href="#">我的货架</a>
					</div>
				</div>
				<div class="bottom">
					您还没有正式的用户名，赶快去完善资料吧！
				</div>
			</div>
			<div class="right">
				<div class="single-product">
					<div class="publish-time">
						发布时间：2014-05-06 5：32
					</div>
					<div class="pic">
						<img src="__PUBLIC__/images/mac.jpg" alt="product">
					</div>
					<div class="title">
						macbook pro
					</div>
					<div class="price">
						￥500
					</div>
					<div class="edit-button">
						<a href="__APP__/Publish/publish"><button type="button" class="btn btn-default">编辑宝贝</button></a>
					</div>
					<div class="delete">
						<a href="#">删除</a>
					</div>
				</div>
				<div class="single-product">
					<div class="publish-time">
						发布时间：2014-05-06 5：32
					</div>
					<div class="pic">
						<img src="__PUBLIC__/images/mac.jpg" alt="product">
					</div>
					<div class="title">
						macbook pro
					</div>
					<div class="price">
						￥500
					</div>
					<div class="edit-button">
						<a href="__APP__/Publish/publish"><button type="button" class="btn btn-default">编辑宝贝</button></a>
					</div>
					<div class="delete">
						<a href="#">删除</a>
					</div>
				</div>
				<div class="single-product">
					<div class="publish-time">
						发布时间：2014-05-06 5：32
					</div>
					<div class="pic">
						<img src="images/mac.jpg" alt="product">
					</div>
					<div class="title">
						macbook pro
					</div>
					<div class="price">
						￥500
					</div>
					<div class="edit-button">
						<a href="publish.html"><button type="button" class="btn btn-default">编辑宝贝</button></a>
					</div>
					<div class="delete">
						<a href="#">删除</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="fenye1">
				<ul class="pagination pagination-lg">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>