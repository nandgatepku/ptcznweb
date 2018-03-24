<?php
/**
 * Created by PhpStorm.
 * User: PTcZn
 * Date: 2018/3/10
 * Time: 12:39
 */

namespace app\index\controller;

use think\Db;
use app\index\common\Base;

class News extends Base
{
    public function index()
    {
        $sql=Db::query("select id,title,abstract,cre_time,author from news where import='0' and newsopen='1' order by id DESC limit 4");
        $this ->assign('sql',$sql);

        $toutiao=Db::query("select id,title,abstract,cre_time,author from news where import='1' and newsopen='1' order by id ");
        $this ->assign('toutiao',$toutiao);

        $citiao=Db::query("select id,title,abstract,cre_time,author from news where import='2' and newsopen='1' order by id ");
        $this ->assign('citiao',$citiao);
        return $this->fetch('news');
    }

    public function rightnav()
    {
        $rightnav=Db::query("select id,title from news where newsopen='1' order by id DESC limit 5 ");
        $this ->assign('rightnav',$rightnav);
    }

    public function article()
    {
        $id=$_GET['id'];
        $isopen=Db::query("select * from news where id='$id' and newsopen='1'");
        if($isopen){
            $arti=Db::query("select title,abstract,cre_time,author,content from news where id='$id'");
            $arti=$arti['0'];
            $this ->assign('arti',$arti);
            $this ->assign('id',$id);
            $this->rightnav();
            return $this->fetch('article');
        }else{
            return $this->redirect('news/newslistall');
        }
    }

    public function newslistall()
    {
        $listall=Db::table('news')->field('id,title,abstract,cre_time,author')->where('newsopen','1')->order('id','desc')->paginate(5);
        $pageall = $listall->render();
        $this->assign('pageall', $pageall);
        $this ->assign('listall',$listall);
        return $this->fetch('newslistall');
    }

    public function newslist1()
    {
//        $list1=Db::query("select id,title,abstract,cre_time,author from news where newstype='1' order by id DESC ");
        $list1=Db::table('news')->field('id,title,abstract,cre_time,author')->where('newsopen','1')->where('newstype','1')->order('id','desc')->paginate(5);
        $page1 = $list1->render();
        $this->assign('page1', $page1);
        $this ->assign('list1',$list1);
        $this->rightnav();
        return $this->fetch('newslist1');
    }

    public function newslist2()
    {
        $list2=Db::table('news')->field('id,title,abstract,cre_time,author')->where('newsopen','1')->where('newstype','2')->order('id','desc')->paginate(5);
        $page2 = $list2->render();
        $this->assign('page2', $page2);
        $this ->assign('list2',$list2);
        $this->rightnav();
        return $this->fetch('newslist2');
    }

    public function newslist3()
    {
        $list3=Db::table('news')->field('id,title,abstract,cre_time,author')->where('newsopen','1')->where('newstype','3')->order('id','desc')->paginate(5);
        $page3 = $list3->render();
        $this->assign('page3', $page3);
        $this ->assign('list3',$list3);
        $this->rightnav();
        return $this->fetch('newslist3');
    }

    public function newslist4()
    {
        $list4=Db::table('news')->field('id,title,abstract,cre_time,author')->where('newsopen','1')->where('newstype','4')->order('id','desc')->paginate(5);
        $page4 = $list4->render();
        $this->assign('page4', $page4);
        $this ->assign('list4',$list4);
        $this->rightnav();
        return $this->fetch('newslist4');
    }


}