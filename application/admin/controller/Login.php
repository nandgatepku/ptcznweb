<?php
/**
 * Created by PhpStorm.
 * User: PTcZn
 * Date: 2018/3/20
 * Time: 20:41
 */

namespace app\admin\controller;

use think\Db;
use app\admin\common\Base;

class Login extends Base
{
    public function index(){
        if(empty($_COOKIE['remember'])) {
            $remember ="";
        }else{
            $remember = 1;
        }
        $this ->assign('remember',$remember);
        return $this->fetch('index');
    }

    public function denglu(){
        $kname=$_POST['kname']; // 获取用户名
        $kpwd=$_POST['kpwd'];   // 获取密码
        $remember = $_POST['remember'];
        if (isset($_POST['sub'])) {
            if(1) {
                if (!empty($kname) && !empty($kpwd)) {//如果用户名和密码非空
                    $select = Db::query("select *from admin where name='$kname' and password='$kpwd'"); // 执行查询
                    if ($select) {// 如果存在该用户
                        //将用户名和密码保存在session中
                        session_start();
                        $_SESSION['kname'] = $kname;
                        $_SESSION['kpwd'] = $kpwd;
                        if($remember == 1){
                            setcookie("name", $kname, time()+3600*24*365);
                            setcookie("password", $kpwd, time()+3600*24*365);
}
                        //跳转到用户中心
//                        $this->redirect('Index/show', '', 2, '登录成功！前往管理后台!...页面跳转中...');
                        echo "loading...";
//                        $this->redirect('Back/Index');
                        exit('<script language="javascript">top.location.href="../Index/index.html"</script>');

                    } else {  // 如果用户不存在
                        $this->error('用户名或密码错误!...页面跳转中...', 'index', '', '2');
                    }
                } else { // 如果用户名或密码未填写
                    $this->error('请填写用户名或密码!...页面跳转中...', 'index', '','2');
                }
            }else{
                $this->error('验证码不正确!...页面跳转中...','index','','2');
            }
        }

        if(isset($_POST['re'])){
            $this->redirect('log','',0,'...刷新界面...');
        }
    }

}