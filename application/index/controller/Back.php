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
        session_start();
        if(empty($_SESSION['uname'])) {
            return $this->redirect('Publogin/index');
        }
        return $this->fetch('index');
    }

    public function logout()
    {
        session_start();
        session_unset();
        return $this->redirect('Publogin/index');
    }
}