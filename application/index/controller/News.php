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
        $sql=Db::query("select id,title,abstract,cre_time,author from news order by id DESC limit 4");

        $this ->assign('sql',$sql);

        return $this->fetch('news');

    }

    public function one()
    {
        return $this->fetch('news_d');
    }

}