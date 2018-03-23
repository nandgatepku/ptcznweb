<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/default/ptcznweb/public/../application/index/view/publogin/log.html";i:1521782581;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="<?php echo url('publogin/denglu'); ?>"method="post">

<link rel="stylesheet" type="text/css" href="/ptcznweb/public/static/css/publogin/log.css"/>
<link rel="stylesheet" type="text/css" href="/ptcznweb/public/static/css/publogin/responsive.css"/>

<script type="text/javascript" src="/ptcznweb/public/static/js/publogin/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".screenbg ul li").each(function(){
		$(this).css("opacity","0");
	});
	$(".screenbg ul li:first").css("opacity","1");
	var index = 0;
	var t;
	var li = $(".screenbg ul li");	
	var number = li.size();
	function change(index){
		li.css("visibility","visible");
		li.eq(index).siblings().animate({opacity:0},3000);
		li.eq(index).animate({opacity:1},3000);
	}
	function show(){
		index = index + 1;
		if(index<=number-1){
			change(index);
		}else{
			index = 0;
			change(index);
		}
	}
	t = setInterval(show,8000);
	//根据窗口宽度生成图片宽度
	var width = $(window).width();
	$(".screenbg ul img").css("width",width+"px");
});
</script>

</head>

<body>

<div class="login-box">
	<h1>作者后台登录</h1>
	<form method="post" action="">
		<div class="name">
			<label>作者账号：</label>
			<input type="text" name="uname" tabindex="1" autocomplete="off" onblur="if(this.value == 'user2')this.value='';" onclick="if(this.value == 'user2')this.value='';" value="user2" />
		</div>
		<div class="password">
			<label>密  码：</label>
			<input type="password" name="upwd" maxlength="16" id="" tabindex="2"/>
		</div>
		<div class="code">
			<label>验证码：</label>
			<input type="text" name="uyzm" maxlength="4" id="code" tabindex="3"/>
			<div class="codeImg">
				<?php
				srand( microtime() * 1000000 );
				$inum = rand( 1, 9 );
				$image_file="/ptcznweb/public/static/img/publogin/" . $inum . ".jpg";
				?>
				<img src="<?php echo $image_file; ?>" />
			</div>
		</div>
		</tr>
		<input type="hidden" name="inum" value="<?php echo $inum ?>">
		<tr>
		<div class="remember">
			<input type="checkbox" id="remember" tabindex="4">
			<label>记住密码</label>
		</div>
		<div class="login">
			<button type="submit" name="sub" tabindex="5">登录</button>
		</div>
	</form>
</div>

<div class="screenbg">
	<ul>
		<li><a href="javascript:;"><img src="/ptcznweb/public/static/img/publogin/cat.jpg"></a></li>
	</ul>
</div>

</body>
</html>
