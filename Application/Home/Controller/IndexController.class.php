<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('login');
//        $this->success('新增成功', './Home/Customer/index',5);
    }
    public function login(){
        $userName=$_POST['userName'];
        $password=$_POST['password'];
        if(($userName=='admin')&&($password==admin)){
            $this->success('登陆成功','../Customer/index');
        }else{
            $this->error('登陆失败');
        }
    }
    public function add(){
        $this->success('新增成功', '../Customer/index',5);
    }
}