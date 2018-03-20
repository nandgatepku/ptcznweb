<?php
namespace app\admin\controller;

use think\Db;
use app\admin\common\Base;

class Index extends Base
{
    public function index()
    {
        session_start();
        if(empty($_SESSION['kname'])) {
            return $this->redirect('Login/index');
        }
        return $this->fetch('index');
    }

    public function main()
    {
         return $this->fetch('main');
    }

    public function newslist()
    {
        $list=Db::query("select id,title,abstract,cre_time,author from news order by id DESC limit 5");

        $this ->assign('list',$list);
        return $this->fetch('newslist');
    }

    public function logout()
    {
        session_start();
        session_unset();
        return $this->redirect('Login/index');
    }
}
