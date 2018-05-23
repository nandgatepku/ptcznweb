<?php
namespace app\admin\controller;

use think\Db;
use  think\Request;
use app\admin\common\Base;

class Index extends Base
{
    public function islog()
    {
        session_start();
        if(empty($_SESSION['kname'])) {
            return $this->redirect('Login/index');
        }
    }

    public function index()
    {
        $this->islog();

        return $this->fetch('index');
    }

    public function main()
    {
        $this->islog();
         return $this->fetch('main');
    }

    public function newslist()
    {
        $this->islog();
//        $list=Db::query("select id,title,abstract,cre_time,author from news order by id DESC") -> paginate(5);
        $list=Db::table('news')->field('id,title,abstract,cre_time,author,newstype,newsopen,import')->order('id','desc')->paginate(6);

//        $page=new Fpage($list->currentPage(),$list->lastPage());
        $page = $list->render();
        $this->assign('page', $page);
        $this ->assign('list',$list);
        return $this->fetch('newslist');
    }

    public function logout()
    {
        session_start();
        session_unset();
        return $this->redirect('Login/index');
    }

    public function newsAdd()
    {
        $this->islog();

        return $this->fetch('newsadd');
    }

    public function newsedit()
    {
        $this->islog();
        $editid=$_GET['id'];
        $this ->assign('editid',$editid);
        $edit=Db::query("select title,abstract,author,content,newstype,newsopen,import from news where id='$editid'");
        $edit=$edit['0'];
        $newstype=$edit['newstype'];
        $newsopen=$edit['newsopen'];
        $newsimport=$edit['import'];
        $this ->assign('editid',$editid);
        $this ->assign('edit',$edit);
        $this ->assign('newstype',$newstype);
        $this ->assign('newsopen',$newsopen);
        $this ->assign('newsimport',$newsimport);

        return $this->fetch('newsedit');
    }

    public function editok()
    {
        $this->islog();

        $editid=$_POST['editid'];
        $edittitle=$_POST['edittitle'];
        $editauthor=$_POST['editauthor'];
        $editabstract=$_POST['editabstract'];
        $editcontent=$_POST['editcontent'];
        $edittype=$_POST['edittype'];
        $editimport=$_POST['editimport'];
        $editopen=$_POST['editopen'];
        $edit_time=date("Y-m-d H:i:s");

        $sql=Db::query("UPDATE news SET title='$edittitle', author='$editauthor', abstract='$editabstract',content='$editcontent',newstype='$edittype',import='$editimport',newsopen='$editopen',edit_time='$edit_time' where id='$editid'");

        return $this->success('ok','newslist');
    }


    public function insert()
    {
        $this->islog();

        $newtitle=$_POST['newtitle'];
//        $newkeyword=$_POST['newkeyword'];
        $newauthor=$_POST['newauthor'];
        $newabstract=$_POST['newabstract'];
        $newcontent=$_POST['newcontent'];
        $newtype=$_POST['newtype'];
        $newcre_time=date("Y-m-d H:i:s");

        $sql=Db::query("insert into  news (title,abstract,author,content,newstype,cre_time,edit_time) values ('$newtitle','$newabstract','$newauthor','$newcontent','$newtype','$newcre_time','$newcre_time')");

        return $this->success('ok','newslist');
    }


    public function lay_img_upload(){
        $file = Request::instance()->file('file');
        if(empty($file)){
            $result["code"] = "1";
            $result["msg"] = "请选择图片";
            $result['data']["src"] = '';
        }else{
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/upload' );
            if($info){
                $name_path =str_replace('\\',"/",$info->getSaveName());
                //成功上传后 获取上传信息
                $result["code"] = '0';
                $result["msg"] = "上传成功";
                $result['data']["src"] = "/ptcznweb/public/static/upload/".$name_path;
            }else{
                // 上传失败获取错误信息
                $result["code"] = "2";
                $result["msg"] = "上传出错";
                $result['data']["src"] ='';
            }
        }
        return json_encode($result);
    }
}
