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
		<div class="row">
			<form class="form-horizontal publish-form" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">标题</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">分类</label>
			    <div class="col-sm-3">
			      <select class="form-control">
					  <option>请选择</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
			    </div>
			    <div class="col-sm-3">
			      <select class="form-control">
					  <option>请选择</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">新旧</label>
			    <div class="col-sm-10">
					<label class="checkbox-inline">
					  <input type="checkbox" value="option1"> 七成新一下
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" value="option2"> 八九成新
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" value="option3"> 全新
					</label>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">价格</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" placeholder="售价">
			    </div>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" placeholder="原价">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">讲价</label>
			    <div class="col-sm-10">
					<label class="checkbox-inline">
					  <input type="checkbox" value="option1"> 接受
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" value="option2"> 不接受
					</label>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">联系方式</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" placeholder="手机号码">
			    </div>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" placeholder="QQ">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">宝贝图片</label>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">宝贝描述</label>
			    <div class="col-sm-6">
					<textarea class="form-control" rows="5" placeholder="1.使用时长 例如：2012年购买使用至今，已经有两年时间。2.新旧程度描述 例如：保护很好。3.存在的问题  例如：完好，没有任何问题。（以上并非必填条目，仅提供参考作用。）"></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-sm-6 col-sm-offset-2">
					<button type="button"></button>
				</div>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>