<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\wamp64\www\ptcznweb\public/../application/admin\view\index\newslist.html";i:1521697243;s:61:"C:\wamp64\www\ptcznweb\application\admin\view\index\head.html";i:1521793882;}*/ ?>
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

    <script type="text/javascript" src="/ptcznweb/public/static/assets/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/ptcznweb/public/static/assets/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/ptcznweb/public/static/assets/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<title>文章列表</title>
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
		<!--<div class="layui-inline">-->
			<!--<a class="layui-btn recommend" style="background-color:#5FB878">推荐文章</a>-->
		<!--</div>-->
		<div class="layui-inline">
			<a class="layui-btn audit_btn">审核文章</a>
		</div>
		<!--<div class="layui-inline">-->
			<!--<a class="layui-btn layui-btn-danger batchDel">批量删除</a>-->
		<!--</div>-->
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
				<col width="15%">
				<col width="7%">
		    </colgroup>
		    <thead>
				<tr>
					<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
					<th style="text-align:left;">文章标题</th>
					<th>作者</th>
					<th>文章类型</th>
					<th>是否头条</th>
					<th>是否公开</th>
					<th>创建时间</th>
					<th>编辑</th>
				</tr> 
		    </thead>
		    <tbody class="news_content">

			</tbody>
			<tbody class="news_content">

			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$id): ?>
			<tr>
				<td>
					<input type="checkbox" name="checked" lay-skin="primary" lay-filter="choose">
					<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
						<i class="layui-icon"></i>
					</div>
				</td>
				<td align="left"><a href='/ptcznweb/public/admin.php/admin/index/../../../index.php/news/article.html?id=<?php echo $list["$k"]["id"]; ?>' target="_blank"><?php echo $list["$k"]['title']; ?></a></td>
				<td><?php echo $list["$k"]['author']; ?></td>
				<td><?php echo $list["$k"]['newstype']; ?></td>
				<td><?php echo $list["$k"]['import']; ?></td>
				<td>
					<!--<input type="checkbox" name="show" checked="checked" lay-skin="switch" lay-filter="isShow" lay-text="是|否">-->
					<!--<div class="layui-unselect layui-form-switch" lay-skin="_switch"><em>否</em>-->
						<!--<i></i></div>-->
					<?php echo $list["$k"]['newsopen']; ?>
				</td>
				<td><?php echo $list["$k"]['cre_time']; ?></td>
				<td>
					<a class="layui-btn layui-btn-mini" href='newsedit.html?id=<?php echo $list["$k"]["id"]; ?>'><i class="iconfont icon-edit"></i> 编辑</a>
					<!--<a class="layui-btn layui-btn-danger layui-btn-mini news_del" data-id="1">-->
						<!--<i class="layui-icon"></i> 删除</a>-->
				</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<?php echo $page; ?>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="/ptcznweb/public/static/assets/layui/layui.js"></script>
	<script type="text/javascript" src="/ptcznweb/public/static/js/admin/newsList.js"></script>
</body>
</html>