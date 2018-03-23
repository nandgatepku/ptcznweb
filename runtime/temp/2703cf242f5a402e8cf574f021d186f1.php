<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\wamp64\www\ptcznweb\public/../application/admin\view\index\newsedit.html";i:1521793815;s:61:"C:\wamp64\www\ptcznweb\application\admin\view\index\head.html";i:1521793882;}*/ ?>
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
<title>文章添加</title>
<body class="childrenBody">

<form class="layui-form" method="post" action="editok">
    <div class="layui-form-item">
        <input type="hidden" name="editid" value="<?php echo $editid; ?>">
        <label class="layui-form-label">文章id=<?php echo $editid; ?></label>
        <div class="layui-input-block">
            <input type="text" name="edittitle" class="layui-input newsName" lay-verify="required" value="<?php echo $edit['title']; ?>">
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
                <input type="text" name="editauthor" class="layui-input newsAuthor" lay-verify="required" value="<?php echo $edit['author']; ?>">
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
                <select name="edittype" class="newsLook" lay-filter="browseLook">
                    <option value="1" <?php if ($newstype == '1') { ?> selected="selected"<?php } ?> >信息化研究</option>
                    <option value="2" <?php if ($newstype == '2') { ?> selected="selected"<?php } ?>>规划思考</option>
                    <option value="3" <?php if ($newstype == '3') { ?> selected="selected"<?php } ?>>旅行足迹</option>
                    <option value="4" <?php if ($newstype == '4') { ?> selected="selected"<?php } ?> >人文观点</option>
                </select>
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">是否头条</label>
            <div class="layui-input-inline">
                <select name="editimport" class="newsLook" lay-filter="browseLook">
                    <option value="0" <?php if ($newsimport == '0') { ?> selected="selected"<?php } ?>>普通</option>
                    <option value="1" <?php if ($newsimport == '1') { ?> selected="selected"<?php } ?>>头条</option>
                    <option value="2" <?php if ($newsimport == '2') { ?> selected="selected"<?php } ?>>次条</option>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">是否公开</label>
            <div class="layui-input-inline">
                <select name="editopen" class="newsLook" lay-filter="browseLook">
                    <option value="0" <?php if ($newsopen == '0') { ?> selected="selected"<?php } ?>>不公开</option>
                    <option value="1" <?php if ($newsopen == '1') { ?> selected="selected"<?php } ?>>公开</option>
                </select>
            </div>
        </div>
    </div>

    <!--<div class="layui-form-item">-->
        <!--<label class="layui-form-label">关键字</label>-->
        <!--<div class="layui-input-block">-->
            <!--<input type="text" name="editkeyword" class="layui-input" placeholder="请输入文章关键字">-->
        <!--</div>-->
    <!--</div>-->
    <div class="layui-form-item">
        <label class="layui-form-label">内容摘要</label>
        <div class="layui-input-block">
            <textarea name="editabstract" class="layui-textarea"><?php echo $edit['abstract']; ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文章内容</label>
        <div class="layui-input-block">
            <textarea name="editcontent" id="content" style="float:left;"><?php echo $edit['content']; ?></textarea>
            <!--<textarea class="layui-textarea layui-hide" name="editcontent" lay-verify="content" id="news_content" style="display: none;"><?php echo $edit['content']; ?></textarea>-->
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button type="submit" class="layui-btn" name="editok">修改</button>
            <a class="layui-btn layui-btn-primary" href="<?php echo url('index/newslist'); ?>">返回</a>
        </div>
    </div>
</form>


<script type="text/javascript" src="/ptcznweb/public/static/assets/layui/layui.js"></script>
<script type="text/javascript" src="/ptcznweb/public/static/js/admin/newsAdd.js"></script>
<!--<script type="text/javascript">-->
    <!--layui.use('layedit',-->
        <!--function() {-->
            <!--var layedit = layui.layedit;-->
            <!--layedit.set({-->
                <!--uploadImage: {-->
                    <!--url: '<?php echo url("index/lay_img_upload"); ?>',-->
                <!--type: 'post'-->
            <!--}-->
        <!--});-->
            <!--layedit.build('news_content',{height:400}); //建立编辑器-->
        <!--});-->
<!--</script>-->
<script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:200})
</script>
</body>
</html>