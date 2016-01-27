<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $this->assign('category','indexCategory');
    }
    public function index(){

        layout(false);//登陆页面不需要应用模板
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
        $db=M("customer");
        $list=$db->limit(10)->select();
        $this->assign('customers',$list);
        $this->display('overview');
    }
    public function add(){
        $this->success('新增成功', '../Customer/index',5);
    }
}