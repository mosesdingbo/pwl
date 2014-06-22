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
				<div class="classify col-xs-3">
					<ul>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/book.png" alt="旧书">
							<a class="broad-kind" href="#">旧书</a>
							<div class="specific">
								<a class="specific-kind" href="#">本科教材</a>
								<a class="specific-kind" href="#">考研资料</a>
								<a class="specific-kind" href="#">GRE</a>
								<a class="specific-kind" href="#">雅思</a>
								<a class="specific-kind" href="#">托福</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/bike.png" alt="代步">
							<a class="broad-kind" href="#">代步</a>
							<div class="specific">
								<a class="specific-kind" href="#">自行车</a>
								<a class="specific-kind" href="#">山地车</a>
								<a class="specific-kind" href="#">电动车</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/pc.png" alt="电脑">
							<a class="broad-kind" href="#">电脑</a>
							<div class="specific">
								<a class="specific-kind" href="#">笔记本</a>
								<a class="specific-kind" href="#">台式机</a>
								<a class="specific-kind" href="#">显示器</a>
								<a class="specific-kind" href="#">路由器</a>
								<a class="specific-kind" href="#">键盘</a>
								<a class="specific-kind" href="#">耳机</a>
								<a class="specific-kind" href="#">上网卡</a>
								<a class="specific-kind" href="#">散热器</a>
								<a class="specific-kind" href="#">电脑桌</a>
								<a class="specific-kind" href="#">鼠标</a>
								<a class="specific-kind" href="#">移动硬盘</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/phone.png" alt="数码">
							<a class="broad-kind" href="#">数码</a>
							<div class="specific">
								<a class="specific-kind" href="#">手机</a>
								<a class="specific-kind" href="#">相机</a>
								<a class="specific-kind" href="#">苹果</a>
								<a class="specific-kind" href="#">PSP</a>
								<a class="specific-kind" href="#">平板电脑</a>
								<a class="specific-kind" href="#">U盘</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/elec.png" alt="电器">
							<a class="broad-kind" href="#">电器</a>
							<div class="specific">
								<a class="specific-kind" href="#">洗衣机</a>
								<a class="specific-kind" href="#">电风扇</a>
								<a class="specific-kind" href="#">电水壶</a>
								<a class="specific-kind" href="#">台风</a>
								<a class="specific-kind" href="#">电吹风</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/sport.png" alt="运动">
							<a class="broad-kind" href="#">运动</a>
							<div class="specific">
								<a class="specific-kind" href="#">哑铃</a>
								<a class="specific-kind" href="#">篮球</a>
								<a class="specific-kind" href="#">足球</a>
								<a class="specific-kind" href="#">滑板</a>
								<a class="specific-kind" href="#">旱冰鞋</a>
								<a class="specific-kind" href="#">羽毛球拍</a>
								<a class="specific-kind" href="#">网球拍</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/daily.png" alt="日用">
							<a class="broad-kind" href="#">日用</a>
							<div class="specific">
								<a class="specific-kind" href="#">鞋</a>
								<a class="specific-kind" href="#">包</a>
								<a class="specific-kind" href="#">裤子</a>
								<a class="specific-kind" href="#">毛衣</a>
								<a class="specific-kind" href="#">外套</a>
								<a class="specific-kind" href="#">短袖</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<img class="kind-icon" src="__PUBLIC__/images/kind-icon/music.png" alt="乐器">
							<a class="broad-kind" href="#">乐器</a>
							<div class="specific">
								<a class="specific-kind" href="#">吉他</a>
								<a class="specific-kind" href="#">架子鼓</a>
								<a class="specific-kind" href="#">其他</a>
							</div>
						</li>
						<li>
							<a class="broad-kind" href="#">其他</a>
						</li>
					</ul>	
				</div>
				<div class="slider col-xs-9">
				    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				      <!-- Wrapper for slides -->
				      <div class="carousel-inner" style="text-align:center">
				        <div class="item active">
				          <img alt="slide" src="__PUBLIC__/images/banner/banner1.jpg" ></img>
				        </div>
				        <div class="item">
				          <img alt="slide" src="__PUBLIC__/images/banner/banner2.jpg" ></img>
				        </div>
				        <div class="item">
				          <img alt="slide" src="__PUBLIC__/images/banner/banner3.jpg" ></img>
				        </div>
				      </div>
				    </div>
				</div>
				<div class="subject col-xs-8">
					<a href="__Home__/Tpl/Subject/subject1.html"><img style="position:relative;top:1px;"src="__PUBLIC__/images/subject/subject1.jpg" alt="考研资料"></a>
					<a href="__Home__/Tpl/Subject/subject2.html"><img src="__PUBLIC__/images/subject/subject2.jpg" alt="数码专柜"></a>
					<a href="__Home__/Tpl/Subject/subject3.html"><img src="__PUBLIC__/images/subject/subject3.jpg" alt="学长卖车"></a>
					<a href="__Home__/Tpl/Subject/subject4.html"><img src="__PUBLIC__/images/subject/subject4.jpg" alt="生活杂物"></a>
				</div>
		</div>
		<div class="row">
			<div class="latest">
				<div class="col-xs-2">
					<img src="__PUBLIC__/images/upload.png" alt="最新上传">
					最新上传
				</div>
				<div class="col-xs-2">
					<img src="__PUBLIC__/images/watch.png" alt="大家都在看">
					大家都在看
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-xs-4 goods">
					<a href="__APP__/Product/product">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							<span>￥</span> 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							<span>￥</span> 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							<span>￥</span> 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							<span>￥</span> 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="__PUBLIC__/images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-4 goods">
					<a href="product.html">
						<img src="images/goods.jpg" alt="goods">
						<div class="title">
							奥林巴斯14-42 II R镜头
						</div>
						<div class="price">
							$ 500
						</div>
						<div class="bottom">
							<div class="watched">
								<span>586</span>人看过
							</div>
						</div>
					</a>
				</div>
		</div>
		<div class="row">
			<div class="fenye">
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