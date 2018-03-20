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
        $time1 = Db::query("select cre_time from news where id=(select max(id) from news)");
        $time_1=$time1['0'];
        $time_1=$time_1['cre_time'];
        $this ->assign('time_1',$time_1);

        $t1 = Db::query("select title from news where id=(select max(id) from news)");
        $title_1=$t1['0'];
        $title_1=$title_1['title'];
        $this ->assign('title_1',$title_1);

        $a1 = Db::query("select abstract from news where id=(select max(id) from news)");
        $abstract_1=$a1['0'];
        $abstract_1=$abstract_1['abstract'];
        $abstract_1=mb_substr($abstract_1,0,70,"utf-8");
        $this ->assign('abstract_1',$abstract_1);


        return $this->fetch('news');

    }

    public function one()
    {
        return $this->fetch('news_d');
    }

}