<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('login');
    }
    public function add(){
        $this->success('新增成功', '../Customer/index',5);
    }
}