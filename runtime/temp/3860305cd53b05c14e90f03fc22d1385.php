<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp64\www\ptcznweb\public/../application/admin\view\login\index.html";i:1527037659;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员后台登录</title>
</head>
<body>
<form action="<?php echo url('login/denglu'); ?>"method="post">
<h1>管理员后台登录</h1>
<form method="post" action="">
    <div class="name">
        <label>管理账号：</label>
        <input type="text" name="kname" tabindex="1" autocomplete="off" onblur="if(this.value == 'admin1')this.value='';" onclick="if(this.value == 'admin1')this.value='';" value="admin1" />
    </div>
    <div class="password">
        <label>密  码：</label>
        <input type="password" name="kpwd" maxlength="16" id="" tabindex="2"/>
    </div>
    <div>
        <td>记住我</td>
        <td><?php if($remember == 1){?><input type="checkbox" name="remember" value="1" checked><?php }
        else{($remember == "")?><input type="checkbox" name="remember" value="1"><?php }?></td>
    </div>

    <div class="login">
        <button type="submit" name="sub" tabindex="5">登录</button>
    </div>
</body>
</html>