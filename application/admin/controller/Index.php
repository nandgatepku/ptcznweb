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
//        $list=Db::query("select id,title,abstract,cre_time,author from news order by id DESC") -> paginate(5);
        $list=Db::table('news')->field('id,title,abstract,cre_time,author,newstype,import')->order('id','desc')->paginate(5);

        $page = $list->render();
        $this->assign('page', $page);
        $this ->assign('list',$list);
        return $this->fetch('newslist');
    }

    public function logout()
    {
        session_start();
        session_unset();
        return $this->redirect('Login/index');
    }

    public function newsAdd()
    {
        return $this->fetch('newsadd');
    }

    public function insert()
    {
        $newtitle=$_POST['newtitle'];
        $newkeyword=$_POST['newkeyword'];
        $newauthor=$_POST['newauthor'];
        $newabstract=$_POST['newabstract'];
        $newcontent=$_POST['newcontent'];
        $newtype=$_POST['newtype'];
        $newcre_time=date("Y-m-d H:i:s");

        $sql=Db::query("insert into  news (title,abstract,author,content,newstype,cre_time,edit_time) values ('$newtitle','$newabstract','$newauthor','$newcontent','$newtype','$newcre_time','$newcre_time')");

        return $this->success('ok');
    }
}
