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
		<div class="row editinfo">
			<form class="form-horizontal publish-form" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 col-sm-offset-2 control-label">用户名</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-sm-offset-2 control-label">上传头像</label>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-sm-offset-2 control-label">手机号码</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-sm-offset-2 control-label">QQ</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-sm-offset-2 control-label">邮箱</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control">
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-sm-6 col-sm-offset-4">
			  		<div class="center" style="width: 188px;margin:0 auto;">
						<button type="button"></button>
					</div>
				</div>
			  </div>
			</form>
		</div>
	</div>

</body>
</html>