<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\wamp64\www\ptcznweb\public/../application/admin\view\index\index.html";i:1521553113;s:61:"C:\wamp64\www\ptcznweb\application\admin\view\Index\head.html";i:1521112279;s:59:"C:\wamp64\www\ptcznweb\application\admin\view\Index\js.html";i:1521111845;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/ptcznweb/public/static/assets/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/ptcznweb/public/static/css/admin/font_eolqem241z66flxr.css" media="all" />
    <link rel="stylesheet" href="/ptcznweb/public/static/css/admin/main.css" media="all" />
</head>
<title>PTCZN后台文章管理</title>
<form action="<?php echo url('index/swi'); ?>"method="post">
<body class="main_body">
	<div class="layui-layout layui-layout-admin">
		<!-- 顶部 -->
		<div class="layui-header header">
			<div class="layui-main">
				<a href="#" class="logo">后台管理</a>

			    <!-- 顶部右侧菜单 -->
			    <ul class="layui-nav top_menu">
			    	<li class="layui-nav-item showNotice" id="showNotice" pc>
						<a href="javascript:;"><i class="iconfont icon-gonggao"></i><cite>系统公告</cite></a>
					</li>
			    	<li class="layui-nav-item" mobile>
			    		<a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>设置</cite></a>
			    	</li>
			    	<li class="layui-nav-item" mobile>
			    		<a href="javascript:;"><i class="iconfont icon-loginout"></i> 退出</a>
			    	</li>

					<li class="layui-nav-item" pc>
						<a href="javascript:;">
							<img src="/ptcznweb/public/static/img/admin/face.jpg" class="layui-circle" width="35" height="35">
							<cite>admin</cite>
							<span class="layui-nav-more layui-nav-mored"></span>
						</a>
						<dl class="layui-nav-child layui-anim layui-anim-upbit layui-show">
							<dd><a href="javascript:;" data-url="page/user/userInfo.html">
								<i class="iconfont icon-zhanghu" data-icon="icon-zhanghu"></i>
								<cite>个人资料</cite></a></dd>
							<dd><a href="javascript:;" data-url="page/user/changePwd.html">
								<i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i>
								<cite>修改密码</cite></a></dd>
							<dd><a href="<?php echo url('Index/logout'); ?>">
								</i><cite>退出</cite></a></dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		<!-- 左侧导航 -->
		<div class="layui-side layui-bg-black">
			<div class="user-photo">
				<a class="img" title="我的头像" ><img src="images/face.jpg"></a>
				<p>你好！<span class="userName">admin</span>, 欢迎登录</p>
			</div>
			<div class="navBar layui-side-scroll" style="height: 385px;">
				<ul class="layui-nav layui-nav-tree">
					<li class="layui-nav-item layui-this">
						<a href="javascript:;" data-url="page/main.html">
							<i class="iconfont icon-computer" data-icon="icon-computer"></i>
							<cite>后台首页</cite>
						</a>
					</li>
					<li class="layui-nav-item">
						<a href="javascript:;" onclick="newslist()">
							<i class="iconfont icon-text" data-icon="icon-text"></i>
							<cite>文章列表</cite>
						</a>
					</li>
					<li class="layui-nav-item">
						<a href="javascript:;" data-url="page/links/linksList.html">
							<i class="iconfont icon-text" data-icon="icon-text"></i>
							<cite>友情链接</cite>
						</a>
					</li>

					<li class="layui-nav-item">
						<a href="javascript:;" data-url="page/systemParameter/systemParameter.html">
							<i class="layui-icon" data-icon=""></i>
							<cite>系统基本参数</cite>
						</a>
					</li>
					<li class="layui-nav-item">
						<a href="javascript:;">
							<i class="layui-icon" data-icon=""></i>
							<cite>二级菜单演示</cite>
							<span class="layui-nav-more"></span>
						</a>
						<dl class="layui-nav-child">
							<dd class=""><a href="javascript:;" data-url="">
								<i class="layui-icon" data-icon=""></i>
								<cite>二级菜单1</cite></a>
							</dd>
							<dd class="">
								<a href="javascript:;" data-url="">
								<i class="layui-icon" data-icon=""></i>
									<cite>二级菜单2</cite>
								</a>
							</dd>
						</dl>
					</li>
					<span class="layui-nav-bar" style="top: 112.5px; height: 0px; opacity: 0;"></span></ul>
			</div>
		</div>
		<!-- 右侧内容 -->
		<div class="layui-body layui-form">
			<div class="layui-tab marg0" lay-filter="bodyTab">
				<ul class="layui-tab-title top_tab">
					<li class="layui-this" lay-id=""><i class="iconfont icon-computer"></i> <cite>$swi</cite></li>
				</ul>
				<div class="layui-tab-content clildFrame">
					<div class="layui-tab-item layui-show">
						<iframe src="<?php echo url('index/newslist'); ?>"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- 底部 -->
		<div class="layui-footer footer">
			<p>copyright @2017 请叫我</p>
		</div>
	</div>


	<!-- 移动导航 -->
	<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
	<div class="site-mobile-shade"></div>

	<script type="text/javascript" src="/ptcznweb/public/static/assets/layui/layui.js"></script>
<script type="text/javascript" src="/ptcznweb/public/static/js/admin/nav.js"></script>
<script type="text/javascript" src="/ptcznweb/public/static/js/admin/leftNav.js"></script>
<script type="text/javascript" src="/ptcznweb/public/static/js/admin/index.js"></script>
</body>
</html>