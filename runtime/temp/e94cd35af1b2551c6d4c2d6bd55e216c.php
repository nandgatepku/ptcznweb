<?php if (!defined('THINK_PATH')) exit(); /*a:10:{s:72:"C:\wamp64\www\ptcznweb\public/../application/index\view\index\index.html";i:1520672995;s:62:"C:\wamp64\www\ptcznweb\application\index\view\common\head.html";i:1520663413;s:66:"C:\wamp64\www\ptcznweb\application\index\view\common\headmenu.html";i:1520672995;s:63:"C:\wamp64\www\ptcznweb\application\index\view\index\banner.html";i:1520662221;s:66:"C:\wamp64\www\ptcznweb\application\index\view\index\newsindex.html";i:1520671932;s:65:"C:\wamp64\www\ptcznweb\application\index\view\index\services.html";i:1520670796;s:64:"C:\wamp64\www\ptcznweb\application\index\view\index\example.html";i:1520671083;s:64:"C:\wamp64\www\ptcznweb\application\index\view\index\linkwho.html";i:1520607434;s:64:"C:\wamp64\www\ptcznweb\application\index\view\common\linkus.html";i:1520669848;s:64:"C:\wamp64\www\ptcznweb\application\index\view\common\footer.html";i:1520668646;}*/ ?>
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
<title>望问津的云端站点</title>
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
                        	<li><a href="">信息化研究</a></li>
                            <li><a href="">规划思考</a></li>
                            <li><a href="">旅行足迹</a></li>
                            <li><a href="">人文观点</a></li>
                        </ul>
                        <div class="hx_mr"><img src="/ptcznweb/public/static/upload/pic3.jpg" alt=""/></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!--幻灯片-->
<div id="banner" class="banner"> 
    <div id="owl-demo" class="owl-carousel"> 
        <a class="item" href="<?php echo url('About/index'); ?>" style="background-image:url(/ptcznweb/public/static/upload/banner.jpg)">
            <img src="/ptcznweb/public/static/upload/ptczn2.png" alt="">
        </a>
        <a class="item" href="<?php echo url('Publogin/index'); ?>" style="background-image:url(/ptcznweb/public/static/upload/banner.jpg)">
            <img src="/ptcznweb/public/static/upload/ptczn3.png" alt="">
        </a>
    </div>
</div>
<!--幻灯片-->

<div class="space_hx">&nbsp;</div>

<div class="i_ma">
	<div class="i_name">
    	思维航向
        <p>Thinking Direction</p>
    </div>
    <div class="space_hx">&nbsp;</div>
    <ul class="clearfix">
    	<li>
        	<a href="<?php echo url('News/index'); ?>">
            	<img src="/ptcznweb/public/static/img/index/p4.png" alt=""/>
                <h6>信息化研究</h6>
                <div class="des">
                	Exploring in Computer Science
                </div>
            </a>
        </li>
        <li>
        	<a href="<?php echo url('News/index'); ?>">
            	<img src="/ptcznweb/public/static/img/index/p6.png" alt=""/>
                <h6>规划思考</h6>
                <div class="des">
                    Thoughts about Urban Planning
                </div>
            </a>
        </li>
        <li>
        	<a href="<?php echo url('News/index'); ?>">
            	<img src="/ptcznweb/public/static/img/index/p1.png" alt=""/>
                <h6>旅行足迹</h6>
                <div class="des">
                    Footprint in My Travel
                </div>
            </a>
        </li>
        <li>
        	<a href="<?php echo url('News/index'); ?>">
            	<img src="/ptcznweb/public/static/img/index/p3.png" alt=""/>
                <h6>人文观点</h6>
                <div class="des">
                	Cultural Viewpoints
                </div>
            </a>
        </li>
    </ul>
</div>

<div class="space_hx">&nbsp;</div>

<div class="i_mb clearfix">
    	<div class="i_mbl">
    	<div class="b_head">
            <a href="<?php echo url('News/index'); ?>"><span>贝海拾遗</span></a>Articles
        </div>
        <ul>
        	<li>
            	<a href="<?php echo url('News/one'); ?>">
                	<p>中国内地轨道交通规划初探</p>
                    <em>2018-03-10</em>
                </a>
            </li>
            <li>
            	<a href="<?php echo url('News/index'); ?>">
                	<p>更多文章待补充待补充啊啊</p>
                    <em>2015-10-25</em>
                </a>
            </li>
            <li>
            	<a href="<?php echo url('News/index'); ?>">
                	<p>更多文章待补充待补充啊啊</p>
                    <em>2015-10-25</em>
                </a>
            </li>
            <li>
            	<a href="<?php echo url('News/index'); ?>">
                	<p>更多文章待补充待补充啊啊</p>
                    <em>2015-10-25</em>
                </a>
            </li>
            <li>
            	<a href="<?php echo url('News/index'); ?>">
                	<p>更多文章待补充待补充啊啊</p>
                    <em>2015-10-25</em>
                </a>
            </li>
        </ul>
    </div>

        <div class="i_mbc">
    	<div class="i_mbc1">
        	<dl class="clearfix">
            	<dt>
                	<b>更多功能</b>
                    More Function
                </dt>
                <dd>
                	<div class="m_search">
                    	<input name="" type="text">
                        <input name="" type="submit" value="">
                    </div>
                </dd>
            </dl>
            <div class="sq"><a href="">探索</a></div>
        </div>
        <ul class="clearfix">
        	<li>
            	<a href="">
                	<img src="/ptcznweb/public/static/img/index/f1.png" alt=""/>
                    <span>金融信息</span>
                </a>
            </li>
            <li>
            	<a href="">
                	<img src="/ptcznweb/public/static/img/index/f2.png" alt=""/>
                    <span>学习笔记</span>
                </a>
            </li>
            <li>
            	<a href="">
                	<img src="/ptcznweb/public/static/img/index/f3.png" alt=""/>
                    <span>功能三</span>
                </a>
            </li>
            <li>
            	<a href="">
                	<img src="/ptcznweb/public/static/img/index/f4.png" alt=""/>
                    <span>功能四</span>
                </a>
            </li>
            <li>
            	<a href="">
                	<img src="/ptcznweb/public/static/img/index/f5.png" alt=""/>
                    <span>功能五</span>
                </a>
            </li>
            <li>&nbsp;</li>
        </ul>
    </div>   

    
     <div class="i_mbr">
    	<div class="b_head"><span>参与案例</span>Examples</div>
    	<div class="tabBox_t">
            <div class="tabBox">
              <ul class="tabNav">
                <li class="now">案例一</li>
                <li>案例二</li>
              </ul>
              
              <div class="tabCont" style="display:block;">
                <div class="videoRow-box">
                    <div class="rel">
                        <a href="javascript:;" class="videoImg">
                            <img src="/ptcznweb/public/static/upload/example1.jpg" alt=""/>
                            <!--<span class="play-btn"><img src="/ptcznweb/public/static/img/index/icon6.png"></span>-->
                        </a>
                       <!--  <video class="video videoPlay" controls>
                            <source src="/ptcznweb/public/static/img/index/movie.ogg">
                        </video> -->
                        <!-- <embed class="video videoPlay" id="player" src="http://player.youku.com/player.php/Type/Folder/Fid/26148725/Ob/1/sid/XMTM2MDQ4NzY3Mg==/v.swf" quality="high" align="middle"></embed> -->
                    </div>
                </div>
              </div>
              <div class="tabCont">
                <div class="videoRow-box">
                    <div class="rel">
                        <a href="javascript:;" class="videoImg">
                            <img src="/ptcznweb/public/static/upload/example2.jpg" alt=""/>
                            <!--<span class="play-btn"><img src="/ptcznweb/public/static/img/index/icon6.png"></span>-->
                        </a>
                        <!-- <video class="video videoPlay" controls>
                            <source src="/ptcznweb/public/static/img/index/movie.ogg">
                        </video> -->
                        <!-- <embed class="video videoPlay" id="player" src="http://player.youku.com/player.php/Type/Folder/Fid/26148725/Ob/1/sid/XMTM2MDQ4NzY3Mg==/v.swf" quality="high" align="middle"></embed> -->
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>  
</div>


<div class="space_hx">&nbsp;</div>
<div class="friend">
	<div class="b_head"><span>友情链接</span></div>
    <div class="frd_m">
    	<a href="">北京大学</a>
        <a href="">北京大学软微学院</a>
        <a href="">腾讯网</a>
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
