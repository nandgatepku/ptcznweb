<?php
/**
 * Created by PhpStorm.
 * User: PTcZn
 * Date: 2018/3/11
 * Time: 13:23
 */

namespace app\index\controller;

use app\index\common\Base;

class Back extends Base
{
    public function index()
    {
        return $this->fetch('index');
    }
}