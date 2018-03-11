<?php
/**
 * Created by PhpStorm.
 * User: PTcZn
 * Date: 2018/3/10
 * Time: 12:39
 */

namespace app\index\controller;

use app\index\common\Base;

class News extends Base
{
    public function index()
    {
        return $this->fetch('news');
    }

    public function one()
    {
        return $this->fetch('news_d');
    }

}