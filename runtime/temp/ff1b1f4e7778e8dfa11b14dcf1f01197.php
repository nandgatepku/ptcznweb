<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:83:"/home/wwwroot/default/ptcznweb/public/../application/index/view/news/newslist2.html";i:1521782581;s:70:"/home/wwwroot/default/ptcznweb/application/index/view/common/head.html";i:1521782581;s:74:"/home/wwwroot/default/ptcznweb/application/index/view/common/headmenu.html";i:1521782581;s:72:"/home/wwwroot/default/ptcznweb/application/index/view/news/rightnav.html";i:1521782581;s:72:"/home/wwwroot/default/ptcznweb/application/index/view/common/linkus.html";i:1521782581;s:72:"/home/wwwroot/default/ptcznweb/application/index/view/common/footer.html";i:1521782581;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link rel="stylesheet" type="text/css" href="/ptcznweb/public/static/css/index/reset.css"/>
<script type="text/javascript" src="/ptcznweb/public/static/js/index/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/ptcznweb/public/static/js/index/js_z.js"></script>
<script type="text/javascript" src="/ptcznweb/public/static/js/index/banner.js"></script>
<link rel="stylesheet" type="text/css" href="/ptcznweb/public/static/css/index/thems.css">
<link rel="stylesheet" type="text/css" href="/ptcznweb/public/static/css/index/responsive.css">
<script language="javascript">
$(function(){
	$('#owl-demo').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["上一个","下一个"],
		autoPlay: true,
		stopOnHover: true
	}).hover(function(){
		$('.owl-buttons').show();
	}, function(){
		$('.owl-buttons').hide();
	});
});
</script>
</head>
<title>望问津云端站点之贝海拾遗</title>
<body>
<div class="header">
    <div class="head clearfix">
        <div class="logo"><a href=""><img src="/ptcznweb/public/static/img/index/logo.png" alt="公司logo"/></a></div>
        <div class="head_r clearfix">
        	<div class="search">
                <input name="" type="text">
                <input name="" type="submit" value="">
            </div>
            <div class="nav_m">
            <div class="n_icon">导航栏</div>
            <ul class="nav clearfix">
                <li class="now"><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                <li><a href="<?php echo url('About/index'); ?>">关于望问津</a></li>
                <li><a href="<?php echo url('News/index'); ?>">贝海拾遗</a></li>
                <li class="er"><a href="">思维航向</a></li>
                <li><a href="<?php echo url('Publogin/index'); ?>">作者登录</a></li>
            </ul>
            <div class="er_m">
                <div class="hx">
                	<i>&nbsp;</i>
                	<div class="b_head">
                    	思维航向<em>Thinking Direction</em>
                    </div>
                    <div class="hx_m clearfix">
                    	<ul class="hx_ml">
                        	<li><a href="<?php echo url('News/newslist1'); ?>">信息化研究</a></li>
                            <li><a href="<?php echo url('News/newslist2'); ?>">规划思考</a></li>
                            <li><a href="<?php echo url('News/newslist3'); ?>">旅行足迹</a></li>
                            <li><a href="<?php echo url('News/newslist4'); ?>">人文观点</a></li>
                        </ul>
                        <div class="hx_mr"><img src="/ptcznweb/public/static/upload/pic3.jpg" alt=""/></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_top">
        <span>规划思考</span>
        <div class="pst">
            当前位置：<a href="">首页</a>-<a href="">规划思考</a>
        </div>
    </div>
    <div class="scd_m clearfix">
        <div class="scd_ml">
            <div>
                <?php if(is_array($list2) || $list2 instanceof \think\Collection || $list2 instanceof \think\Paginator): if( count($list2)==0 ) : echo "" ;else: foreach($list2 as $k=>$id): ?>
                <div>
                    <div>
                        <span><?php echo substr($list2["$k"]['cre_time'],0,10);?></span>
                        <p><a href='article.html?id=<?php echo $list2["$k"]["id"]; ?>'><?php echo $list2["$k"]['title']; ?></a></p>
                    </div>
                    <div>
                        <?php echo mb_substr($list2["$k"]['abstract'],0,70,'utf-8');?>...
                    </div>
                    <br>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php echo $page2; ?>
        </div>
        
<div class="scd_mr">
    <div class="box_h">
        <span>当前攻坚</span>
        <a href="">更多</a>
    </div>
    <div class="box_m"><img src="/ptcznweb/public/static/upload/pic4.jpg" alt=""/></div>
    <div class="space_hx">&nbsp;</div>
    <div class="box_h">
        <span>参与案例</span>
        <a href="">更多</a>
    </div>
    <div class="box_m">
        <div class="videoRow-box">
            <div class="rel">
                <a href="#">
                    <img src="/ptcznweb/public/static/upload/example1.jpg" alt=""/>
                    <!--<span class="play-btn"><img src="/ptcznweb/public/static/img/index/icon7.png"></span>-->
                </a>
                <!--<video class="video videoPlay" controls>-->
                <!--<source src="/ptcznweb/public/static/img/index/movie.ogg">-->
                <!--</video>-->
                <!--<embed class="video videoPlay" id="player" src="http://player.youku.com/player.php/Type/Folder/Fid/26148725/Ob/1/sid/XMTM2MDQ4NzY3Mg==/v.swf" quality="high" align="middle"></embed>-->
            </div>
        </div>
    </div>
    <div class="space_hx">&nbsp;</div>
    <div class="box_h">
        <span>其他随笔</span>
        <a href="<?php echo url('News/newslistall'); ?>">更多</a>
    </div>
    <div class="box_m">
        <ul>
            <li><a href='article.html?id=<?php echo $rightnav["0"]["id"]; ?>'><?php echo $rightnav['0']['title']; ?>...</a></li>
            <li><a href='article.html?id=<?php echo $rightnav["1"]["id"]; ?>'><?php echo $rightnav['1']['title']; ?>..</a></li>
            <li><a href='article.html?id=<?php echo $rightnav["2"]["id"]; ?>'><?php echo $rightnav['2']['title']; ?>...</a></li>
            <li><a href='article.html?id=<?php echo $rightnav["3"]["id"]; ?>'><?php echo $rightnav['3']['title']; ?>...</a></li>
            <li><a href='article.html?id=<?php echo $rightnav["4"]["id"]; ?>'><?php echo $rightnav['4']['title']; ?>...</a></li>
        </ul>
    </div>
</div>
    </div>
</div>

<div class="fn_bg">
	<ul class="f_nav clearfix">
    	<li>
        	<a href="">
            	<img src="/ptcznweb/public/static/img/index/f_1.png" alt=""/>
                <span>联系方式</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="/ptcznweb/public/static/img/index/f_4.png" alt=""/>
                <span>微信公众号</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="/ptcznweb/public/static/img/index/f_2.png" alt=""/>
                <span>工作室介绍</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="/ptcznweb/public/static/img/index/f_5.png" alt=""/>
                <span>一键分享</span>
            </a>
        </li>
    </ul>
</div>
<div class="bq">Copyright&copy;2017-2018&nbsp;&nbsp;<b>www.ptczn.cn</b>&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn" target="_blank">京ICP备18007602号</a></div>

</body>
</html>