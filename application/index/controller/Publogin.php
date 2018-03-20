<?php
/**
 * Created by PhpStorm.
 * User: PTcZn
 * Date: 2018/3/10
 * Time: 13:11
 */

namespace app\index\controller;
use think\Db;
use app\index\common\Base;

class Publogin extends Base
{
    public function index()
    {
        return $this->fetch('publogin');
    }
    public function log()
    {
        return $this->fetch('log');
    }

    public function back()
    {
        return $this->fetch('../back/Index');
    }

    public function denglu(){
        $uname=$_POST['uname']; // 获取用户名
        $upwd=$_POST['upwd'];   // 获取密码
        $uyzm=$_POST['uyzm'];  // 获取输入的验证码
        $inum=$_POST['inum'];  // 获取输入的验证码
        if (isset($_POST['sub'])) {
            if($uyzm == $inum) {
                if (!empty($uname) && !empty($upwd)) {//如果用户名和密码非空
                    $select = Db::query("select *from author where authorname='$uname' and password='$upwd'"); // 执行查询
                    if ($select) {// 如果存在该用户
                        //将用户名和密码保存在session中
                        session_start();
                        $_SESSION['uname'] = $uname;
                        $_SESSION['upwd'] = $upwd;
                        //跳转到用户中心
//                        $this->redirect('Index/show', '', 2, '登录成功！前往管理后台!...页面跳转中...');
                        echo "loading...";
//                        $this->redirect('Back/Index');
                        exit('<script language="javascript">top.location.href="../back/Index.html"</script>');

                    } else {  // 如果用户不存在
                        $this->error('用户名或密码错误!...页面跳转中...', 'log', '', '2');
                    }
                } else { // 如果用户名或密码未填写
                    $this->error('请填写用户名或密码!...页面跳转中...', 'log', '','2');
                }
            }else{
                $this->error('验证码不正确!...页面跳转中...','log','','2');
            }
        }

        if(isset($_POST['re'])){
            $this->redirect('log','',0,'...刷新界面...');
        }
    }
}