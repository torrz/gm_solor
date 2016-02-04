<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/24
 * Time: 13:43
 */
namespace Home\Controller;
use Think\Controller;
class SettingController extends Controller {
    public function _initialize(){
        $value = session('user');
        if(session('?user')){
        }
        else{
            $this->error("请先登录",__ROOT__,1);
        }
        date_default_timezone_set('Asia/Shanghai');
        $this->assign('category','settingCategory');
    }
    public function index(){
        $this->display('index');
    }

    //管理tags
    public function tagsIndex(){
        $belong=I('get.belong');
        $this->assign('belong',$belong);
        $this->display('tagsIndex');
    }
    public function tagsGet(){
        $addtag=M('tag');
        $belong=I('get.belong');
        $addTagList=$addtag->where("belong=".$belong)->select();
        echo json_encode($addTagList);
    }
    //修改tag
    public function tagsEdit(){
        $Tag=M('tag');
        $id=$_GET['id'];
        $data['content']=$_GET['content'];
        $Tag->where('id='.$id)->save($data);
        echo "成功！";
    }
    //删除tag
    public function tagsDel(){
        $Tag=M('tag');
        $id=$_GET['id'];
        $Tag->where('id='.$id)->delete();
        echo "成功！";
    }
    //增加tag
    public function tagAdd(){
        $Tag=M('tag');
        $data['belong']=I('get.belong');
        $data['content']=$_GET['content'];
        $Tag->add($data);
        echo "成功！";
    }
}