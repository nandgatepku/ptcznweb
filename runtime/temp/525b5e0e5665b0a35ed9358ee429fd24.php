<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"C:\wamp64\www\ptcznweb\public/../application/index\view\news\news.html";i:1521642020;s:62:"C:\wamp64\www\ptcznweb\application\index\view\common\head.html";i:1520663413;s:66:"C:\wamp64\www\ptcznweb\application\index\view\common\headmenu.html";i:1521636850;s:64:"C:\wamp64\www\ptcznweb\application\index\view\common\linkus.html";i:1520669848;s:64:"C:\wamp64\www\ptcznweb\application\index\view\common\footer.html";i:1520668646;}*/ ?>
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
    <div class="news clearfix">
    	<div class="news_l">
        	<div class="scd_top">
                <span>重点随笔</span>
                <div class="pst">
                    当前位置：<a href="">首页</a>-<a href="">贝海拾遗</a>
                </div>
            </div>
            <div class="new_m">
            	<div class="box mainPhoto"> <span class="goleft nextPage"><a href="javascript:void(0)"><img src="/ptcznweb/public/static/img/index/prev.png"/></a></span>
                  <div class="go slidegrid">
                    <ul class="slideitems">
                      <li>
                      	<div class="tu"><a href="<?php echo url('News/one'); ?>"><img src="/ptcznweb/public/static/upload/pic7.jpg" alt=""/></a></div>
                        <div class="n_m">
                            <div class="title">
                                <span><?php echo substr($toutiao['0']['cre_time'],0,10);?></span>
                                <p class="name"><a href="<?php echo url('News/one'); ?>"><?php echo $toutiao['0']['title']; ?></a></p>
                            </div>
                            <div class="des">
                                <?php echo mb_substr($toutiao['0']['abstract'],0,70,'utf-8');?>...
                            </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="goright prevPage"><a href="javascript:void(0)"><img src="/ptcznweb/public/static/img/index/next.png" /></a></span> </div>
                <script>
                $(function(){
                $('.mainPhoto .slidegrid').scrollable({size:1,circular:true,next:'.nextPage',prev:'.prevPage'}).autoscroll();
                });	
                </script> 
            	<div class="n_m">
                    <div class="title">
                        <span><?php echo substr($citiao['0']['cre_time'],0,10);?></span>
                        <p class="name"><a href=""><?php echo $citiao['0']['title']; ?></a></p>
                    </div>
                    <div class="des">
                        <?php echo mb_substr($citiao['0']['abstract'],0,70,'utf-8');?>...
                    </div>
                </div>
            </div>
        </div>
        <div class="news_r">
        	<div class="scd_top">
                <span><a href="<?php echo url('news/newslistall'); ?>">近期随笔</a></span>
            </div>
            <div class="new_m">
        	<div class="n_m">
                <div class="title">
                    <span><?php echo substr($sql['0']['cre_time'],0,10);?></span>
                    <p class="name"><a href=""><?php echo $sql['0']['title']; ?></a></p>
                </div>
                <div class="des">
                    <?php echo mb_substr($sql['0']['abstract'],0,70,'utf-8');?>...
                </div>
            </div>
            <div class="n_m">
                <div class="title">
                    <span><?php echo substr($sql['1']['cre_time'],0,10);?></span>
                    <p class="name"><a href=""><?php echo $sql['1']['title']; ?></a></p>
                </div>
                <div class="des">
                    <?php echo mb_substr($sql['1']['abstract'],0,70,'utf-8');?>...
                </div>
            </div>
            <div class="n_m">
                <div class="title">
                    <span><?php echo substr($sql['2']['cre_time'],0,10);?></span>
                    <p class="name"><a href=""><?php echo $sql['2']['title']; ?></a></p>
                </div>
                <div class="des">
                    <?php echo mb_substr($sql['2']['abstract'],0,70,'utf-8');?>...
                </div>
            </div>
            <div class="n_m">
                <div class="title">
                    <span><?php echo substr($sql['3']['cre_time'],0,10);?></span>
                    <p class="name"><a href=""><?php echo $sql['3']['title']; ?></a></p>
                </div>
                <div class="des">
                    <?php echo mb_substr($sql['3']['abstract'],0,70,'utf-8');?>...
                </div>
           </div>
        </div>
        </div>
    </div>
    <div class="space_hx">&nbsp;</div>
    <div class="pages">
    	<a href="">首页</a>
        <a href="">上一页</a>
        <a href="">下一页</a>
        <a href="">尾页</a>
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
