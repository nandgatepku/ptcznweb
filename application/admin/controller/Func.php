<?php
/**
 * Created by PhpStorm.
 * User: PTcZn
 * Date: 2018/3/22
 * Time: 21:21
 */

namespace app\admin\controller;

use  think\Request;
use app\admin\common\Base;

class Func extends Base
{
    public function islog(){
        session_start();
        if(empty($_SESSION['kname'])) {
            return $this->redirect('Login/index');
        }
    }

    public function editUpload(){
        if ($this->request->isPost()){
            $res['code']=0;
            $res['msg']='上传成功';
            $file=$this->request->file('file');
            $info=$file->move('__STATIC__/upload/2018/');
            if($info) {
                $res['data']['title'] = $info->getFilename();
                $filepath = 'upload/2018/'.$info->getSaveName();
                $res['data']['src'] = '/'.$filepath;
            }
            else{
                $res['code']=1;
                $res['msg']='上传失败'.$file->getError();
            }
            echo json_encode($res);
        }
    }

    public function lay_img_upload(){
        $file = Request::instance()->file('file');
        if(empty($file)){
            $result["code"] = "1";
            $result["msg"] = "请选择图片";
            $result['data']["src"] = '';
        }else{
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/layui' );
            if($info){
                $name_path =str_replace('\\',"/",$info->getSaveName());
                //成功上传后 获取上传信息
                $result["code"] = '0';
                $result["msg"] = "上传成功";
                $result['data']["src"] = "/uploads/layui/".$name_path;
            }else{
                // 上传失败获取错误信息
                $result["code"] = "2";
                $result["msg"] = "上传出错";
                $result['data']["src"] ='';
            }
        }
        return json_encode($result);
    }

    public function uploadImage(Request $request)
    {
//thinkphp5的框架，如果是原生的，用$_FiLES['file']获取到图片，
        $file 	= $request->file('file');
        $info 	= $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            $name_path =str_replace('\\',"/",$info->getSaveName());

            $result['data']["src"] = "/uploads/layui/".$name_path;
            $url 	= $info->getSaveName();
            //图片上传成功后，组好json格式，返回给前端
            $arr   = array(
                'code' => 0,
                'message'=>'',
                'data' =>array(
                    'src' => "/uploads/".$name_path
                ),
            );
        }

        echo json_encode($arr);

    }

    public function uppic(){
        $this->islog();
        return  $this->fetch('luppic');
    }

    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');

        // 移动到框架应用根目录/public/uploads/ 目录下
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/upload');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
//                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

                echo <<< EOA
img src="__STATIC__/upload/
EOA;

                echo $info->getSaveName();
                echo '" width="540">';

//                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
//                ;location.href='javascript:history.go(-1);'
//                echo "<SCRIPT language=JavaScript>alert(\"图片地址为:" . $info->getSaveName() . "\");window.location.href=document.referrer; </SCRIPT>";
            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }


}