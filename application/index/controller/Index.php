<?php
    namespace app\index\controller;
 
    use app\index\common\Base;

    class Index extends Base
    {
        public function index()
        {
            return $this->fetch('index');

            if(isset($_POST['homepage'])) {
                $this->redirect('Index/index');
            }

        }
    }
