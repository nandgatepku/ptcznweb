<?php
    namespace app\index\controller;

    use think\Db;
    use app\index\common\Base;

    class Subway extends Base
    {
        public function index()
        {
            return $this->fetch('index');

        }
    }
