<?php
    namespace app\index\controller;

    use think\Db;
    use app\index\common\Base;

    class Index extends Base
    {
        public function index()
        {
            $this->newsindex();
            return $this->fetch('index');

            if(isset($_POST['homepage'])) {
                $this->redirect('Index/index');
            }
        }

        public function newsindex()
        {
            $newsindex=Db::query("select id,title,cre_time from news where newsopen='1' order by id DESC limit 5 ");
            $this ->assign('newsindex',$newsindex);
        }
    }
