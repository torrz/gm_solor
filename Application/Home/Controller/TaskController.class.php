<?php
/**
 * Created by PhpStorm.
 * User: Torrz
 * Date: 2016/1/20
 * Time: 22:30
 */
namespace Home\Controller;
use Think\Controller;
class TaskController extends Controller {
    public function _initialize(){
        $value = session('user');
        if(session('?user')){
        }
        else{
            $this->error("请先登录",__ROOT__,1);
        }
        $this->assign('category','taskCategory');
    }
    public function index(){
        $this->display('index');
    }
}