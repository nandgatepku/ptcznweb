<?php
/**
 * Created by PhpStorm.
 * User: pku
 * Date: 18-3-9
 * Time: 下午9:00
 */

namespace app\index\controller;


use app\index\common\Base;

class About extends Base
{
    public function index()
    {
        return $this->fetch('about');
    }

    public function cv()
    {
        return $this->fetch('cv');
    }

}