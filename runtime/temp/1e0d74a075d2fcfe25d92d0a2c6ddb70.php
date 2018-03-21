<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"C:\wamp64\www\ptcznweb\public/../application/admin\view\index\newsadd.html";i:1521629262;s:61:"C:\wamp64\www\ptcznweb\application\admin\view\index\head.html";i:1521112279;}*/ ?>
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
<title>文章添加--layui后台管理模板</title>
<body class="childrenBody">
	<form class="layui-form" method="post" action="insert">
		<div class="layui-form-item">
			<label class="layui-form-label">文章标题</label>
			<div class="layui-input-block">
				<input type="text" name="newtitle" class="layui-input newsName" lay-verify="required" placeholder="请输入文章标题">
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-inline">
				<label class="layui-form-label">自定义属性</label>
				<div class="layui-input-block">
					<input type="checkbox" name="tuijian" class="tuijian" title="推荐">
					<input type="checkbox" name="shenhe" class="newsStatus" title="审核">
					<input type="checkbox" name="show" class="isShow" title="展示">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">文章作者</label>
				<div class="layui-input-inline">
					<input type="text" name="newauthor" class="layui-input newsAuthor" lay-verify="required" placeholder="请输入文章作者">
				</div>
			</div>
			<!--<div class="layui-inline">		-->
				<!--<label class="layui-form-label">发布时间</label>-->
				<!--<div class="layui-input-inline">-->
					<!--<input type="text" class="layui-input newsTime" lay-verify="date" onclick="layui.laydate({elem:this})">-->
				<!--</div>-->
			<!--</div>-->
			<div class="layui-inline">
				<label class="layui-form-label">文章分类</label>
				<div class="layui-input-inline">
					<select name="newtype" class="newsLook" lay-filter="browseLook">
				        <option value="1">信息化研究</option>
				        <option value="2">规划思考</option>
						<option value="3">旅行足迹</option>
						<option value="4">人文观点</option>
				    </select>
				</div>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">关键字</label>
			<div class="layui-input-block">
				<input type="text" name="newkeyword" class="layui-input" placeholder="请输入文章关键字">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">内容摘要</label>
			<div class="layui-input-block">
				<textarea placeholder="请输入内容摘要" name="newabstract" class="layui-textarea"></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">文章内容</label>
			<div class="layui-input-block">
				<textarea class="layui-textarea layui-hide" name="newcontent" lay-verify="content" id="news_content"></textarea>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button type="submit" class="layui-btn" lay-submit="" lay-filter="addNews">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>

	<script type="text/javascript" src="/ptcznweb/public/static/assets/layui/layui.js"></script>
	<script type="text/javascript" src="/ptcznweb/public/static/js/admin/newsAdd.js"></script>
</body>
</html>