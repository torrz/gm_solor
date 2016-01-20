<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('login');
        $this->success('新增成功', './Home/Customer/index',5);
    }
    public function add(){
        $this->success('新增成功', '../Customer/index',5);
    }
}