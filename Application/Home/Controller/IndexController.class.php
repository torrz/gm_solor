<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    Public function _initialize(){
        $this->assign('category','indexCategory');
    }
    public function index(){
        $this->display('login');
//        $this->success('新增成功', './Home/Customer/index',5);
    }
    public function login(){
        $userName=$_POST['userName'];
        $password=$_POST['password'];
        if(($userName=='admin')&&($password==admin)){
            $this->success('登陆成功','../Index/overview');
        }else{
            $this->error('登陆失败');
        }
    }

    public function overview(){
        $this->display('overview');
    }
    public function add(){
        $this->success('新增成功', '../Customer/index',5);
    }
}