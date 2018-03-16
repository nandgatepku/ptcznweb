<?php
namespace app\admin\controller;

use app\admin\common\Base;

class Index extends Base
{
    public function index()
    {
        $swi="后台首页";
        return $this->fetch('index');
    }

    public function swi()
    {
        return $this->fetch('main');
    }

    public function main()
    {
        return $this->fetch('main');
    }

    public function newslist()
    {
        $swi="文章列表";
    }
}
