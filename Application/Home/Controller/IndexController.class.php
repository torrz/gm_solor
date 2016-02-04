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
    public function exitSolor(){
        session('[destroy]');
        redirect(__ROOT__, 0, '');
//        $this->success('操作完成',__ROOT__,0);
    }
    public function login(){
        $admin=M(admin);
        $userName=$_POST['userName'];
        $password=$_POST['password'];
        if($userName&&$password){
            $user=$admin->where('user="'.$userName.'"')->find();
            if($user){
                if($user['password']==$password){
                    session('user','admin');
                    $this->success('登陆成功','../Index/overview');
                }else{
                    $this->error("密码错误！");
                }
            }else{
                $this->error('账号不存在!');
            }
        }else{
            $this->error("请输入账号或密码！");
        }
//
//        if(($userName=='admin')&&($password==admin)){
//            $this->success('登陆成功','../Index/overview');
//        }else{
//            $this->error('登陆失败');
//        }
    }

    public function overview(){
        $value = session('user');
        if(session('?user')){
        }
        else{
            $this->error("请先登录",__ROOT__,1);
        }
        $db=M("customer");
        $list=$db->limit(10)->select();
        $this->assign('customers',$list);
        $this->display('overview');
    }
    public function add(){
        $this->success('新增成功', '../Customer/index',5);
    }
}