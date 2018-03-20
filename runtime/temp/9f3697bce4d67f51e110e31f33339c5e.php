<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\wamp64\www\ptcznweb\public/../application/admin\view\index\newslist.html";i:1521558258;s:61:"C:\wamp64\www\ptcznweb\application\admin\view\Index\head.html";i:1521112279;}*/ ?>
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
<title>文章列表--layui后台管理模板</title>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal newsAdd_btn">添加文章</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn recommend" style="background-color:#5FB878">推荐文章</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn audit_btn">审核文章</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div>
		<div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">本页面刷新后除新添加的文章外所有操作无效，关闭页面所有数据重置</div>
		</div>
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>
				<col width="50">
				<col>
				<col width="9%">
				<col width="9%">
				<col width="9%">
				<col width="9%">
				<col width="9%">
				<col width="15%">
		    </colgroup>
		    <thead>
				<tr>
					<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
					<th style="text-align:left;">文章标题</th>
					<th>作者</th>
					<th>审核状态</th>
					<th>浏览权限</th>
					<th>是否展示</th>
					<th>发布时间</th>
					<th>操作</th>
				</tr> 
		    </thead>
		    <tbody class="news_content">

			</tbody>
			<tbody class="news_content">
			<tr>
				<td>
					<input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose">
					<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
						<i class="layui-icon"></i>
					</div>
				</td>
				<td align="left"><a href="/ptcznweb/public/admin.php/admin/index/../../../index.php/news/one.html" target="_blank"><?php echo $list['0']['title']; ?></a></td>
				<td><?php echo $list['0']['author']; ?></td>
				<td>审核通过</td>
				<td>开放浏览</td>
				<td>
					<input type="checkbox" name="show" lay-skin="switch" lay-text="是|否" lay-filter="isShow">
					<div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>否</em>
						<i></i></div>
				</td>
				<td><?php echo $list['0']['cre_time']; ?></td>
				<td>
					<a class="layui-btn layui-btn-mini news_edit"><i class="iconfont icon-edit"></i> 编辑</a>
					<a class="layui-btn layui-btn-normal layui-btn-mini news_collect">
						<i class="layui-icon"></i> 收藏</a>
					<a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="1">
						<i class="layui-icon"></i> 删除</a></td></tr>
			<tr>
				<td>
				<input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose">
					<div class="layui-unselect layui-form-checkbox" lay-skin="primary"><i class="layui-icon"></i></div></td>
				<td align="left">自定义的模块名称可以包含/吗</td>
				<td>请叫我马哥</td>
				<td style="color:#f00">待审核</td>
				<td>开放浏览</td>
				<td><input type="checkbox" name="show" lay-skin="switch" lay-text="是|否" lay-filter="isShow" checked="">
					<div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>否</em>
						<i></i>
					</div>
				</td><td>2017-04-14</td>
				<td>
					<a class="layui-btn layui-btn-mini news_edit">
						<i class="iconfont icon-edit"></i> 编辑</a>
					<a class="layui-btn layui-btn-normal layui-btn-mini news_collect"><i class="layui-icon"></i> 收藏</a>
					<a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="2"><i class="layui-icon"></i> 删除</a>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="../../layui/layui.js"></script>
	<script type="text/javascript" src="newsList.js"></script>
</body>
</html>